module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        postcss: {
            options: {
                map: false, // inline sourcemaps
                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            }, /*
             dist: {
             src: 'stylesheets/*.css'
             }*/
            dev: {
                expand: true,
                src: 'stylesheets/*.css',
                dest: 'dist/'
            }
        },
        watch: {
            grunt: {
                options: {
                    reload: true
                },
                files: ['Gruntfile.js']
            },
            postcss: {
                files: 'stylesheets/*.css',
                tasks: ['postcss']
            }
        },
        responsive_images: {
            dev: {
                options: {
                    engine: 'im',
                    sizes: [
                        {
                            width: 1024,
                            quality: 80
                        },
                        {
                            width: 970,
                            quality: 80
                        },
                        {
                            width: 640,
                            quality: 80
                        },
                        {
                            width: 600,
                            quality: 80
                        },
                        {
                            width: 485,
                            quality: 80
                        },
                        {
                            width: 305,
                            quality: 80
                        },
                        {
                            width: 225,
                            quality: 80
                        }
                    ]
                },
                files: [{
                        expand: true,
                        src: ['**/*.{jpg,gif,png}'],
                        cwd: 'images_src/',
                        dest: 'images/'
                    }]
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    'dist/js/app.min.js': ['js/app.js']
                }
            }
        }
    });


    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-responsive-images');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['build', 'watch']);
};