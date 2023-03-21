# Social Brothers WordPress Case

This is the interview case for the WordPress developer role at [Social Brothers](https://socialbrothers.nl).

This README will outline everything you need to know to get started and all the requirements of this case.

## Case Requirements

- Recreate the design pixel perfect as a fully working website.
- Make sure the website is responsive.
- Do not use any plugins.
- Do not use jQuery. Write vanilla JavaScript or TypeScript (optional).
- Write your SCSS/CSS using the [BEM (Block Element Modifier)](http://getbem.com/) naming methodology.
- Build upon the existing file structure and files.
- Include your database in your repository before sending it to us. (check the database section to see how)
- Looking up solutions on StackOverflow is fine, but try to write your own code as much as possible.

It is important to note that the case you are about to build does not need te be perfect (or complete) when you hand it in. The purpose of this case is to see how well versed you are in WordPress, PHP, JavaScript, and (S)CSS development. Try to keep the amount of time you spend on the case to about 4-6 hours.

## Design

Social Brothers has provided a visual design with development specifications. You can find the design here: [Sketch Design](https://www.sketch.com/s/b8e31a79-9aa0-4c2b-8670-ad3792f01d86).

To view the technical specifications of the design, open a specific page design (for instance: Homepage), and click the button "Inspect" in the top right corner.

The images used in the design are available in the `/assets/images` directory.

:information_source: There is no design made for the Events Archive. We expect this page to be similar to the Blog Archive page, with the addition of the Event Filtering at the top.

## Dependencies

Before you start this case you will need the following dependencies on your local machine:

- [Node.js](https://nodejs.org/en/) for a JavaScript runtime on your local machine.
- [Yarn](https://yarnpkg.com/) for managing NPM packages.
- [LocalWP](https://localwp.com/) for easy local WordPress development.
- [Git](https://git-scm.com/) for version control (optional, see theme installation).

##### Already included:

- [Fontawesome](https://fontawesome.com/): Icon library (Free - Solid style)
- [Google Fonts](https://fonts.google.com/): Font library (Roboto - normal/medium/bold)
- [Bootstrap](https://getbootstrap.com/): CSS framework (grid)

#### Node.js

Download the [latest installer](https://nodejs.org/en/) and follow the steps to install Node.js on your system.

#### Yarn

Yarn can be enabled through Corepack, a binary shipped with Node.js. Execute the following terminal command:
`corepack enable`

#### LocalWP

With LocalWP it's easy to set up and manage local development environments for WordPress. When creating a new site choose the following options:

- Create a Site: `Create a new Site`
- Site name: `SB WP Case`
- Environment: `Preferred`
- Username and password: `Choose yourself`
- After the installation of the local site is completed turn on One-click Admin for easy `/wp-admin` access.

## Theme development

### Installation

Use the following guidelines to get started!

- Navigate to the local sites directory in your terminal. The default location of LocalWP sites is a directory calles `Local Sites`.
- Navigate to the `/themes` directory for the local site you just created.

- In the themes directory create a new folder called `socialbrothers`
- Place the contents of the entire repository (this folder) in the directory in the new theme folder

### Post Types and Taxonomies

In order to build the case correctly, you will need to register some custom post types and taxonomies.

- You can find an example of how to register a custom post type in `socialbrothers/lib/post-types.php`
- To register a custom taxonomy you can look in `socialbrothers/lib/taxonomies.php`

### Asset Compiling

This case template uses Webpack to bundle and compile TypeScript/JavaScript and SCSS. The compiled assets will be placed in the `/dist` directory.

##### Install

To install the npm dependencies:

- Run the `yarn` command in the socialbrothers theme root

After installing the dependencies you can run Webpack. This configuration has two 'modes' to run in: _development_ and _production_.

##### Development mode

While the development mode is running Webpack will watch for changes, recompile your TypeScript/JavaScript and SCSS assets and reload the server. The development configuration will not produce optimal JS and CSS files.

To start the development server:

- Run the `yarn dev` command in the socialbrothers theme root.

##### Production mode

Running Webpack in the production configuration is the last step of the development process. Running Webpack in this mode will produce optimal JS and CSS files which guarantees the best performance for your site.

To run the build process for production:

- Run the `yarn prod` command in the socialbrothers theme root.

## Submitting the Case

Once you are done with the case development, we would like to receive the a zip file contain the following:

- The entire `socialbrothers` theme folder
- An export of your database

Don't forget to run Webpack in the production mode before compiling your zip!

Exporting a WordPress database is very easy with LocalWP.

- Go to the 'Database' tab in LocalWP
- Click on 'Open in Adminer'
- Click on 'Export'
- Select the options:
  - output: save
  - format: sql
  - The rest can stay as is
- Make sure all database tables are selected
- Add the `.sql` file to your theme files

From the entire Social Brothers WordPress Team we want to thank you for your interest in our company and taking the time to make the case. We look forward to meeting you in the future!
