# Project 5 - Quotes on Dev

This is a project at RED Academy Web Developer Program to showcase the creation of a custom Wordpress theme, forked from Underscores. It also involved creating an AJAX query for Wordpress API.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content/themes` directory.

### 2. Rename the `quotesondev` directory

Give your theme an apropriate name.

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** to install the npm packages you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

## Skills learned

- Filtering a Wordpress get_posts loop.
- Creating a form that conects to Wordpress API and submit posts.
- Verifying that a user is logged in.

## Main Takeaways

1 - To avoid bots and trolls, we can make sure users are logged in before posting to a Wordpress site. We can also require admin approval on posts before publishing them.

2 - Wordpress provides a powerful API that can be for CRUDs. It can be accessed by means of AJAX queries.
