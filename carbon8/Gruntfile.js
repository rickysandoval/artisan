// Generated on 2014-05-29 using generator-webapp 0.4.9
'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to recursively match all subfolders:
// 'test/spec/**/*.js'

module.exports = function (grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    var modRewrite = require('connect-modrewrite');

    // Configurable paths
    var config = {
        app: 'app',
        dist: 'dist',
        node: 'node_modules',
        test: 'test'
    };

    // Define the configuration for all the tasks
    grunt.initConfig({

        // Project settings
        config: config,

        // Watches files for changes and runs tasks based on the changed files
        watch: {
            bower: {
                files: ['bower.json'],
                tasks: ['bowerInstall']
            },
            // ts: {
            //    files: ['<%= config.app %>/**/*.ts'],
            //    tasks: ['typescript']
            // },
            // jade: {
            //    files: ['<%= config.app %>/**/*.jade'],
            //    tasks: ['jade']
            // },
            simple_include: {
                files: ['<%= config.app %>/**/*.{html,tpl}'],
                tasks: ['simple_include:server']
            },
            js: {
                files: ['<%= config.app %>/**/*.js'],
                tasks: ['jshint'],
                options: {
                    livereload: 35123
                }
            },
            gruntfile: {
                files: ['Gruntfile.js']
            },
            compass: {
                files: ['<%= config.app %>/**/*.{scss,sass}'],
                tasks: ['compass:server','autoprefixer']
            },
            styles: {
                files: ['<%= config.app %>/**/*.css'],
                tasks: ['newer:copy:server', 'autoprefixer']
            },
            livereload: {
                options: {
                    livereload: '<%= connect.options.livereload %>',
                    keepalive: true
                },
                files: [
                    '<%= config.app %>/**/*.{html,tpl}',
                    '.tmp/styles/{,*/}*.css',
                    '<%= config.app %>/images/{,*/}*'
                ]
            }
        },

        // Compress dist to file
        compress: {
            dist: {
                options: {
                    archive: function() {
                        var manifest = grunt.file.readJSON('bower.json');
                        return manifest.name + manifest.version + '.zip';
                    }
                },
                files: [{
                    expand: true,
                    dot: true,
                    cwd: 'dist/',
                    src: ['**/*'],
                    dest: ''
                }]
            }
        },

        // Angular automate injection
        ngAnnotate: {
            options: {
                singleQuotes: true
            },
            app: {
                files: [{
                    expand: true,
                    cwd: '.tmp',
                    src: ['**/*.js'],
                    dest: '.tmp'
                }]
            }
        },

        // Shell command
        shell: {
            options: {
                stdout: true,
                stderr: true
            },
            target: {
                command: function(params){
                    var cli;
                    switch(params){
                        case 'android':
                            cli = 'cocoonjs run android';
                            break;
                        case 'ios':
                            cli = 'cocoonjs run ios';
                            break;
                        case 'desktop':
                            cli = 'electron <%= config.app %>/desktop';
                            break;
                        case 'e2e':
                            cli = 'node <%= config.node %>/protractor/bin/protractor <%= config.test %>/e2e.js';
                            break;
                        case 'unit':
                            cli = '<%= config.node %>/karma/bin/karma start <%= config.test %>/unit.js';
                            break;
                    }
                    return cli;
                }
            }
        },

        // The actual grunt server settings
        connect: {
            options: {
                port: 9111,
                open: true,
                livereload: 35123,
                protocol: 'http',
                hostname: '0.0.0.0' // Change this to '0.0.0.0' to access the server from outside
            },
            livereload: {
                options: {
                    middleware: function(connect) {
                        return [
                            modRewrite(['^[^\\.]*$ /index.html [L]']),
                            connect.static('.tmp'),
                            connect().use('/bower_components', connect.static('./bower_components')),
                            connect.static(config.app)
                        ];
                    }
                }
            },
            dist: {
                options: {
                    base: '<%= config.dist %>',
                    livereload: false
                }
            }
        },

        // Empties folders to start fresh
        clean: {
            dist: {
                files: [{
                    dot: true,
                    src: ['dist']
                }]
            },
            server: {
                files: [{
                    dot: true,
                    src: [ '.tmp', '.sass-cache']
                }]
            }
        },

        // Make sure code styles are up to par and there are no obvious mistakes
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                reporter: require('jshint-stylish'),
            },
            all: ['<%= config.app %>/scripts/{,*/}*.js', '<%= config.app %>/angularjs/**/*.js']
        },

        // Import static file
        simple_include: {
            server: {
                src: ['<%= config.app %>/**/*.html'],
                dest: '.tmp/'
            },
            dist: {
                src: ['<%= config.app %>/**/*.html'],
                dest: '<%= config.dist %>/'
            }
        },

        // Compiles TypeScript to JavaScript
        // typescript: {
        //     base: {
        //         src: ['<%= config.app %>/**/*.ts'],
        //         dest: '<%= config.app %>',
        //         options: {
        //             module: 'amd', //or commonjs
        //             target: 'es5', //or es3
        //             basePath: '<%= config.app %>',
        //             sourceMap: false,
        //             declaration: false,
        //             comments: true
        //         }
        //     }
        // },
        // jade: {
        //     options: {
        //         pretty: true,
        //     },
        //     server: {
        //         files: [{
        //             expand: true,
        //             cwd: '<%= config.app %>',
        //             dest: '.tmp',
        //             src: '*.jade',
        //             ext: '.html'
        //         }]
        //     },
        //     dist: {
        //         files: [{
        //             expand: true,
        //             cwd: '<%= config.app %>',
        //             dest: '<%= config.dist %>',
        //             src: '*.jade',
        //             ext: '.html'
        //         }]
        //     }
        // },
        // Compiles Sass to CSS and generates necessary files if requested
        compass: {
            options: {
                cssDir: '.tmp/styles',
                sassDir: '<%= config.app %>/styles',
                imagesDir: '<%= config.app %>/images',
                fontsDir: '<%= config.app %>/fonts',
                generatedImagesDir: '<%= config.app %>/images/generated',
                generatedImagesPath:'<%= config.app %>/images/generated',
                javascriptsDir: '<%= config.app %>/scripts',
                httpGeneratedImagesPath:'../images/generated',
                httpImagesPath: '../images',
                httpFontsPath: '../fonts',
                relativeAssets: false,
                assetCacheBuster: false,
                noLineComments: false
            },
            dist: {
                options: {
                    generatedImagesDir: '<%= config.dist %>/images/generated'
                }
            },
            server: {
                options: {
                    debugInfo: false
                }
            }
        },
        // Add vendor prefixed styles
        autoprefixer: {
            options: {
                browsers: ['last 1 version']
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: '.tmp/styles/',
                    src: '{,*/}*.css',
                    dest: '.tmp/styles/'
                }]
            }
        },

        // AngularJs partials to js
        ngtemplates: {
            myApp: {
                cwd: '<%= config.app %>',
                src: 'angularjs/**/*.tpl',
                dest: '<%= config.app %>/angularjs/templates.js',
                options: {
                    htmlmin: {
                        collapseWhitespace: true,
                        collapseBooleanAttributes: true
                    }
                }
            }
        },

        // Automatically inject Bower components into the HTML file
        bowerInstall: {
            app: {
                src: [
                    '<%= config.app %>/commom/head-bundle.tpl',
                    '<%= config.app %>/commom/script-bundle.tpl'
                ],
                exclude: ['<%= config.bower %>/bootstrap-sass-official/assets/javascripts/bootstrap.js', ]
            },
            sass: {
                src: ['<%= config.app %>/styles/{,*/}*.{scss,sass}']
            }
        },

        // Renames files for browser caching purposes
        rev: {
            dist: {
                files: {
                    src: [
                        '<%= config.dist %>/scripts/{,*/}*.js',
                        '<%= config.dist %>/styles/{,*/}*.css',
                        '<%= config.dist %>/images/{,*/}*.*',
                        '<%= config.dist %>/styles/fonts/{,*/}*.*',
                        '<%= config.dist %>/*.{ico,png}'
                    ]
                }
            }
        },
        // Reads HTML for usemin blocks to enable smart builds that automatically
        // concat, minify and revision files. Creates configurations in memory so
        // additional tasks can operate on them
        useminPrepare: {
            options: {
                dest: '<%= config.dist %>'
            },
            html: [
                '<%= config.app %>/commom/head-bundle.tpl',
                '<%= config.app %>/commom/script-bundle.tpl'
            ]
        },
        // Performs rewrites based on rev and the useminPrepare configuration
        usemin: {
            options: {
                assetsDirs: [
                    '<%= config.dist %>',
                    '<%= config.dist %>/images'
                ]
            },
            html: ['<%= config.dist %>/{,*/}*.html'],
            css: ['<%= config.dist %>/styles/{,*/}*.css']
        },
        // concat:{
        //     options: {
        //     }
        // },
        // uglify: {
        //     options: {
        //         preserveComments: false,
        //         compress: {
        //             drop_console: true
        //         }
        //     }
        // },
        // cssmin:{
        //     dist: {

        //     }
        // },
        svgmin: {
            dist: {
                files: [{
                    expand: true,
                    cwd: '<%= config.app %>/fonts',
                    src: '{,*/}*.svg',
                    dest: '<%= config.dist %>/fonts'
                }]
            }
        },
        htmlmin: {
            dist: {
                options: {
                    collapseBooleanAttributes: true,
                    collapseWhitespace: true,
                    conservativeCollapse: true,
                    removeAttributeQuotes: true,
                    removeCommentsFromCDATA: true,
                    removeEmptyAttributes: true,
                    removeOptionalTags: true,
                    removeRedundantAttributes: true,
                    useShortDoctype: true
                },
                files: [{
                    expand: true,
                    cwd: '<%= config.dist %>',
                    src: '{,*/}*.html',
                    dest: '<%= config.dist %>'
                }]
            }
        },

        // Copies remaining files to places other tasks can use
        copy: {
            dist:{
                files:
                [{
                    expand: true,
                    dot: true,
                    cwd: '<%= config.app %>',
                    dest: '<%= config.dist %>',
                    src: [
                        '*.{ico,png,txt}',
                        '.htaccess',
                        'web.config',
                        'sitemap.xml',
                        '{,*/}*.html',
                        'fonts/{,*/}*.*'
                    ]
                },{
                    expand: true,
                    dot: true,
                    cwd: '<%= config.app %>/data/',
                    dest: '<%= config.dist %>/data/',
                    src: '**'
                },{
                    expand: true,
                    dot: true,
                    cwd: '<%= config.app %>/scripts/libs/',
                    dest: '<%= config.dist %>/scripts/libs/',
                    src: '**'
                },{
                    expand: true,
                    dot: true,
                    cwd: '<%= config.app %>/scripts/',
                    dest: '<%= config.dist %>/scripts/',
                    src: 'settings.js'
                },{
                    expand: true,
                    dot: true,
                    cwd: '<%= config.app %>/images/',
                    dest: '<%= config.dist %>/images/',
                    src: '**'
                },{
                    expand: true,
                    dot: true,
                    cwd: '<%= config.app %>/angularjs/',
                    dest: '<%= config.dist %>/angularjs/',
                    src: '**/*.tpl'
                }]
            },
            server:{
                files:
                [{
                    expand: true,
                    dot: true,
                    cwd: '<%= config.app %>',
                    dest: '.tmp/',
                    src: [
                        'styles/{,*/}*.css',
                        'fonts/{,*/}*.*'
                    ]
                }]
            }
        },

        // Run some tasks in parallel to speed up build process
        concurrent: {
            server: [
                'simple_include:server',
                'compass:server',
                //'typescript',
                //'jade:server',
                'copy:server'
            ],
            dist: [
                'compass',
                //'typescript',
                //'jade:dist',
                'copy:dist'
            ]
        }
    });


    grunt.registerTask('serve', function (target) {
        if (target === 'dist') {
            return grunt.task.run(['build', 'connect:dist:keepalive']);
        }
        grunt.task.run([
            'clean:server',
            'concurrent:server',
            'autoprefixer',
            'connect:livereload',
            'watch'
        ]);
    });

    grunt.registerTask('server', function (target) {
        grunt.log.warn('The `server` task has been deprecated. Use `grunt serve` to start a server.');
        grunt.task.run([target ? ('serve:' + target) : 'serve']);
    });

    grunt.registerTask('build', [
        'clean:dist',
        'bowerInstall',
        'concurrent:dist',
        'simple_include:dist',
        'useminPrepare',
        'concat',
        'ngAnnotate',
        'cssmin',
        'uglify',
        'usemin',
        'autoprefixer'
    ]);

    grunt.registerTask('clear', [
        'clean:server',
        'clean:dist'
    ]);

    grunt.registerTask('android', [
        'shell::android'
    ]);

    grunt.registerTask('desktop', [
        'shell::desktop'
    ]);

    grunt.registerTask('ios', [
        'shell::ios'
    ]);

    grunt.registerTask('e2e', [
        'shell::e2e'
    ]);

    grunt.registerTask('unit', [
        'shell::unit'
    ]);

    grunt.registerTask('zip', [
        'build',
        'compress'
    ]);

    grunt.registerTask('default', [
        'serve'
    ]);
};