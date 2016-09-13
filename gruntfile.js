'use strict';

module.exports = function (grunt) {

  grunt.initConfig({
    sass: {

      build: {
        options: {
          style: 'compressed',
          precision: 8
        },
        files: {
          'build/assets/css/main.min.css': [
            'src/assets/sass/main.scss'
          ],
        },
      },

      dist: {
        options: {
          style: 'compressed',
          precision: 8
        },
        files: {
          'dist/assets/css/main.min.css': [
            'src/assets/sass/main.scss'
          ],
        },
      },

    },

    concat: {
      options: {
        separator: ';\n'
      },

      libs: {
        src: [
          'src/assets/js/vendor/jquery.min.js',
          'src/assets/js/vendor/jquery-ui.min.js',
          'src/assets/js/vendor/*.js'
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
          mangle: false
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

      dist: {
        options: {
          mangle: false
        },
        files: {
          'dist/assets/js/libs.js': ['build/assets/js/libs.min.js'],
          'dist/assets/js/app.js': ['build/assets/js/app.min.js'],
        },
      },

    },

    php2html: {
        default: {
          options: {
          // tweak $_SERVER['SERVER_NAME'] & $_SERVER['SERVER_HOST']
          requestHost: 'localhost:8080',
          // relative links should be renamed from .php to .html
          processLinks: true,
          // htmlhint: false,
          // process: function(response,callback) {
          //   // do some funy stuff with the reponse text
          //   // var parsedResponse = ...
          //   // send it back to the task
          //   callback(parsedResponse);
          // }
        },
        files: [
        {expand: true, cwd: 'build/', src: ['*.php'], dest: 'dist/', ext: '.html' }
        ]
      }
    },

    watch: {
      options: {
        livereload: 65535,
        interval: 1000
      },
      sass: {
        files: [
          'src/assets/sass/**/*.scss'
        ],
        tasks: ['sass:build']
      },
      js: {
        files: [
          'src/assets/js/**/*.js'
        ],
        tasks: ['concat', 'uglify:app']
      },
      html: {
        files: [
          'build/*.html',
          'build/**/*.php'
        ],
      },
    },
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-php2html');
  // Register tasks
  grunt.registerTask('default', ['sass:build', 'concat', 'watch']);
  grunt.registerTask('build', ['sass:build', 'concat', 'uglify:libs', 'uglify:app']);
  grunt.registerTask('dist', ['sass:dist', 'concat', 'uglify', 'php2html']);
};
