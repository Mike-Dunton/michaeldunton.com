module.exports = function(grunt) {
  // Project configuration.
var mozjpeg = require('imagemin-mozjpeg');
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
      clean: ["build"],
      copy: {
        main: {
          files: [
           {expand: true, cwd: 'src/', src: ['**'], dest: 'build/'},
          ]
        }
      },
      cssmin: {
        add_banner: {
          options: {
            banner: '/* Michael Dunton minified css file */',
          },
          files: {
            'build/css/style.css': ['src/css/*.css']
          }
        }
      },
      imagemin: {                          
        static: {                          
          options: {                       
            optimizationLevel: 3,
            svgoPlugins: [{ removeViewBox: false }],
            use: [mozjpeg()]
          },
          files: {
            'build/img/self.jpeg': 'src/img/self.jpeg',
          }
        }
  }
  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.registerTask('default', ['clean', 'copy', 'cssmin', 'imagemin']);

};