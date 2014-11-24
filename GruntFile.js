module.exports = function(grunt) {
  // Project configuration.
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
            banner: '/* Michael Dunton minified css file */'
          },
          files: {
            'build/css/style.css': ['src/css/*.css']
          }
        }
      }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Default task(s).
  grunt.registerTask('default', ['clean', 'copy', 'cssmin']);

};