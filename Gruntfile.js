module.exports = function(grunt) {
    "use strict";

    require('load-grunt-tasks')(grunt);

    var config = {
        sass: {
            dist: {
                expand: true,
                files: [{
                    'src/css/styles.css': 'src/sass/styles.scss'
                }]
            }
        },

        csscomb: {
            dist: {
                options: {
                    config: ".csscomb.json"
                },
                expand: true,
                src: ['src/css/**/*.css', 'src/sass/**/*.scss']
            }
        },

        concat_css: {
            style: {
                src: ["src/css/wp.css", "src/css/styles.css"],
                dest: "src/style.css"
            }
        },

        copy: {
            style: {
                expand: true,
                flatten: true,
                // cwd: 'src/',
                src: ['src/*.php',
                    'src/style.css'],
                dest: 'G:/_xampp/htdocs/sip/wp-content/themes/sip/'
            }
        },

        express: {
            dist: {
                options: {
                    port: 9000,
                    hostname: 'localhost',
                    bases: ['src'],
                    livereload: true
                }
            }
        },

        watch: {
            dist: {
                files: ['src/sass/**/*.scss'],
                tasks: ["csscomb", "sass", "concat_css", "copy"],
                options: {
                    livereload: true
                }
            },
            php: {
                files: ["src/*.php"],
                tasks: ["copy"],
                options: {
                    livereload: false
                }
            }
        }
    };

    grunt.initConfig(config);
    grunt.registerTask('default', ['sass']);
    grunt.registerTask('server', ['express', 'watch']);
}; 