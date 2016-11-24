"use strict";

module.exports = function(grunt) {

  require("load-grunt-tasks")(grunt);

  grunt.initConfig({
    copy: {
      build: {
        files: [{
          expand: true,
          cwd: "src",
          src: [
            "fonts/**/*.{woff,woff2}",
            "img/**",
            "js/**",
            "*.html",
            "*.php",
            "template-parts/*.php",
            "inc/*.php"
          ],
          dest: "../feelman-wordpress/wp-content/themes/feelman"
        }]
      },
      html: {
        files: [{
          expand: true,
          cwd: "src",
          src: ["*.html"],
          dest: "../feelman-wordpress/wp-content/themes/feelman"
        }]
      },
      php: {
        files: [{
          expand: true,
          cwd: "src",
          src: ["*.php","template-parts/*.php","inc/*.php"],
          dest: "../feelman-wordpress/wp-content/themes/feelman"
        }]
      },
      image: {
        files: [{
          expand: true,
          cwd: "src",
          src: ["img/**"],
          dest: "../feelman-wordpress/wp-content/themes/feelman"
        }]
      }
    },

    clean: {
      build: ["build"]
    },

    less: {
      style: {
        files: {
          "../feelman-wordpress/wp-content/themes/feelman/css/style.css": "src/less/style.less"
        }
      }
    },

    postcss: {
      style: {
        options: {
          processors: [
            require("autoprefixer")({browsers: [
              "last 1 version",
              "last 2 Chrome versions",
              "last 2 Firefox versions",
              "last 2 Opera versions",
              "last 2 Edge versions"
            ]})
          ]
        },
        src: "../feelman-wordpress/wp-content/themes/feelman/css/*.css"
      }
    },

    csso: {
      style: {
        options: {
          report: "gzip"
        },
        files: {
          "../feelman-wordpress/wp-content/themes/feelman/css/style.min.css": ["../feelman-wordpress/wp-content/themes/feelman/css/style.css"]
        }
      }
    },

    svgstore: {
      options: {
        svg: {
          style: "display: none"
        }
      },
      symbols: {
        files: {
          "../feelman-wordpress/wp-content/themes/feelman/img/symbols.svg": ["src/img/*.svg"]
        }
      }
    },

    svgmin: {
      symbols: {
        files: [{
          expand: true,
          src: ["../feelman-wordpress/wp-content/themes/feelman/img/*.svg"]
        }]
      }
    },

    imagemin: {
      images: {
        options: {
          optimizationLevel: 3
        },
        files: [{
          expand: true,
          src: ["../feelman-wordpress/wp-content/themes/feelman/img/**/*.{png,jpg,gif}"]
        }]
      }
    },

    php: {
        dist: {
            options: {
                hostname: 'localhost',
                port: 3000,
                base: '../feelman-wordpress', // Project root
                keepalive: false,
                open: false
            }
        }
    },

    browserSync: {
      server: {
        bsFiles: {
          src: [
            "*.html",
            "*.php",
            "template-parts/*.php",
            "inc/*.php",
            "css/*.css"
          ]
        },
        options: {
          server: "../feelman-wordpress",
          watchTask: true,
          notify: false,
          open: true,
          ui: false
        }
      }
    },

    watch: {
      html: {
        files: ["src/*.html"],
        tasks: ["copy:html"]
      },
      php: {
        files: ["src/*.php","src/template-parts/*.php","src/inc/*.php"],
        tasks: ["copy:php"]
      },
      style: {
        files: ["src/less/**/*.less"],
        tasks: ["less", "postcss", "csso"],
        options: {
          spawn: false
        }
      },
      image: {
        files: ["src/img/**"],
        tasks: ["copy:image"]
      }
    }
  });

  grunt.registerTask("serve", ["php:dist", "browserSync", "watch"]);
  grunt.registerTask("symbols", ["svgmin", "svgstore"]);
  grunt.registerTask("build", [
    "clean",
    "copy",
    "less",
    "postcss",
    "csso",
    "symbols",
    "imagemin"
  ]);
};
