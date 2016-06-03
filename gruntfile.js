'use strict';

module.exports = function (grunt) {

  grunt.initConfig({
    sass: {
      dist: {
        options: {
          style: 'compressed',
          precision: 8,
          compass: true,
        },
        files: {
          'build/assets/css/main.min.css': [
            'src/assets/sass/main.scss',
          ],
        },
      },
    },
    concat: {
      options: {
        separator: ';\n',
      },
      libs: {
        src: [
          'src/assets/js/vendor/jquery.min.js',
          'src/assets/js/vendor/jquery-ui.min.js',
          'src/assets/js/vendor/*.js',
        ],
        dest: 'build/assets/js/libs.js',
      },
      app: {
        src: [
          'src/assets/js/modal.js',
          'src/assets/js/functions.js',
          'src/assets/js/main.js',
          'src/assets/js/menu.js',
          'src/assets/js/polls.js'
        ],
        dest: 'build/assets/js/app.js',
      },
    },
    uglify: {
      libs: {
        options: {
          mangle: false,
        },
        files: {
          'build/assets/js/libs.min.js': ['build/assets/js/libs.js'],
        },
      },
      app: {
        files: {
          'build/assets/js/app.min.js': ['build/assets/js/app.js'],
        },
      },
    },
    watch: {
      options: {
        livereload: true,
      },
      sass: {
        files: [
          'src/assets/sass/**/*.scss',
        ],
        tasks: ['sass'],
      },
      js: {
        files: [
          'src/assets/js/**/*.js',
        ],
        tasks: ['concat', 'uglify:app'],
      },
      html: {
        files: [
          'build/*.html',
          'build/**/*.php',
        ],
      },
    },
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Register tasks
  grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch']);

};
