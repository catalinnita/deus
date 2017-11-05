module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
  
    sass: {
      dist: {
        files: {
          'style.css' : 'source/scss/main.scss'
        }
      }
    },
  
    watch: {
      css: {
        files: 'source/scss/**/**/*.scss',
        tasks: ['sass']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default',['watch']);

}