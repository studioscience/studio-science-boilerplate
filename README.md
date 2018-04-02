GETTING STARTED
---------------

Studio Science Started Theme
Built by Studio Science Development Team

Setup and Commands
npm install : Installs dependancies from package.json file.
gulp : Watches style and script files for changes and automatically applies actions and minifies files for production.

Version Control
Versioning of the repository should follow the general guid3lines of Semantic Versioning on semver.org. X.Y.Z (Major.Minor.Patch). Patches are self explanitory. New features, that do not break backward compatibility will increment the Y (Minor). New features that break backward compatibility or major revisions will increment the X (Major).

GIT
The preferred GIT branching model should follow the general guidelines in the <a href="http://nvie.com/posts/a-successful-git-branching-model/" target="_blank">article</a> by Vincent Driessen, A successful Git branching model. It is highly recommended to learn and follow these guidelines.

Branches
master or production -> Always stable. Supplies Production environment.
development -> Contains features and bug fixes currently being worked on. When stable, merged to master or release branch as applicable.
feature-* -> Branch off of develop. Used for creating new features. When approved, merged back to develop branch.
release-* or staging -> Branch from develop. Evaluation of release to go into production. Free's the develop branch to immediate take the next feature development pushes.
hotfix-* -> Used for fixes, when a critical bug is found in production.

Issue Tracker
All bugs should be reported in the issue tracker. When working on the theme, please take a look at the tracker for outstanding issues.

NPM
All dependencies (front-end and non-front-end) should be installed using NPM. These dependencies should be defined in package.json and saved in -save--dev flag. All dependencies need to be compiled and minified using gulp for production.

Gulp
Gulp is an important part of our front-end development pipeline. We use it to handle SASS and JavaScript compilation as well as minification procedures for production.

Coding Style
Use tabs for indentation (no spaces)

Naming convention
Lowercase names and underscores for variables, functions, and methods.
Uppercase names and underscores for class names
All caps for constants

TEMPLATES
---------

Views
Views are templates that will be extended to the Wordpress Loop templates. Templates will be constructed by the use of components.

Modules
Modules are the building blocks of a View. The use of modules helps isolate blocks of code that help understand and maintain site being worked on by various team members.

Partials
Partials are smaller building blocks that can help build modules. The main purpose of using partials and not repeating the same code on multiple Components. If you have an item or functionality on more that one Component, it should be a partial that is extended to the Component.

Renaming your theme using Studio Science Boilerplate Template

1. Search for: `'studioscienceboilerplate'` and replace with: `'your-theme-name'`
2. Search for: `studioscienceboilerplate_` and replace with: `your_theme_name_`
3. Search for: `studioscienceboilerplate-` and replace with: `your-theme-name-`
4. Search for: `Studio Science Boilerplate` and replace with: `Your Theme Name`

Then, update the stylesheet header in `sass/style.scss` and rename `studioscienceboilerplate.pot` from `languages` folder to use the theme's slug. 

FILE STRUCTURE
--------------

/your-theme-name/   	  		# → Main theme folder in wp-content
├── acf-json/             		# → ACF local json files ( <a href="https://www.advancedcustomfields.com/resources/local-json/" target="_blank">Local Json</a> )
├── assets/            	  		# → Theme assets
│   ├── fonts/			  		# → Theme fonts
│   ├── icons/			  		# → Theme icons
│   └── images/           		# → Theme images
│       └── raw/   		  		# → Images optimized with gulp and saved in parent folder
├── inc/                  		# → Theme PHP
│   ├── cpt/      		  		# → Custom post types
│   ├── filters.php       		# → Theme filters
│   ├── helpers.php       		# → Helper functions
│   └── setup.php         		# → Theme setup
├── js/                   		# → Theme JS
│   ├── custom/      	  		# → Custom Javascript
│   └── vendors/          		# → Vendors, JS Plugins, JS libraries
├── languages/            		# → Localization files for translation
│   └── your-theme-name.pot  	# → Portable Object Template
├── node_modules/         		# → Node.js packages (never push to production server)
├── sass/            	  		# → Theme stylesheets
│   ├── base/           		# → Base theme styles folder 
│   │   ├── _normalize.scss		# → HTML element and attribute rulesets to normalize styles across all browsers
│   │   ├── global.scss        	# → Global styles
│   │   ├── mixins.scss        	# → Custom mixins
│   │   ├── typography.scss     # → Extendable typography styles		
│   │   └── variables.scss      # → Stylesheet variables
│   ├── modules/     			# → Modules styles
│   ├── partials/         		# → Patial styles
│   ├── vendors/   		    	# → Vendor styles
│   ├── views/            		# → Views styles
│   └── style.scss 				# → Theme meta information and scss file imports
├── templates/               	# → Theme templates
│   ├── modules/     			# → Building blocks of a view
│   ├── partials/         		# → Building blocks that can help build modules
│   └── views/            		# → Templates that will be extended to the Wordpress templates
├── .gitignore          		# → Used by Git to determine which files and directories to ignore
├── 404.php          			# → Error page template
├── archive.php          		# → Blog post archive
├── comments.php   				# → Comments template
├── footer.php   				# → Theme footer template
├── functions.php     			# → Theme includes
├── gulpfile.js    				# → Javascript task runner
├── header.php   				# → Theme header template
├── index.php         			# → Main template file
├── package.json          		# → Node.js dependencies and scripts
├── page.php         			# → Main page template file
├── README.md    				# → This file
├── screenshot.png    			# → Theme screenshot for WP admin
├── search.php 	    			# → Search form and result template
├── sidebar.php     			# → Sidebar template
├── single.php 	    			# → Blog article template
└── style.css 	    			# → Theme stylesheet (compiled and created by gulp task from sass folder)
