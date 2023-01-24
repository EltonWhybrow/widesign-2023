| Staging                                                                                                                  | Production                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------ | --------------------------------------------------------------------------------------------------------------------- |
| [![Staging](https://github.com/EltonWhybrow/redhill-tutoring/actions/workflows/staging_release.yml/badge.svg)](https://github.com/EltonWhybrow/redhill-tutoring/actions/workflows/staging_release.yml) | [![Production](https://github.com/EltonWhybrow/redhill-tutoring/actions/workflows/prod_release.yml/badge.svg)](https://github.com/EltonWhybrow/redhill-tutoring/actions/workflows/prod_release.yml) |

# Redhill Tutoring Wordpress Theme

Redhill Tutoring Custom WP theme using [TailwindCSS](https://tailwindcss.com/) and [Laravel Mix](https://laravel.com/docs/5.8/mix).

## Dependencies

NodeJS  
XAMPP Server (or similar)  
...

## Local setup:

### Prerequisites:

install a default version Wordpress on your local machine using your prefered method. You will need WAMP / MAMP / LOCAL or similar to run apache/DB/php on you local machine dependent on you operating system.
Once you have the site locally follow steps below to get local development version running.

1. Drop theme/repo into your local development site as is (is same directory structure).
1. `cd` into XXXXXX theme directory (to package.json)
1. Run `npm install`
1. Duplicate the `local-example.json` file to `local.json`, then replace the `proxy` value with your local development hostname
   - This will allow you to use live reload/injection while working on your CSS/JS
1. Run `npm run dev` and you should be golden or at least bronzing

## Commands

#### `npm run dev`

Assets will be compiled and BrowserSync will proxy the dev host allowing you to work while seeing your CSS and JS changes appear on the site as they are recompiled.

#### `npm run webpack`

Runs the development build

#### `npm run prod`

Runs the product build which includes asset file versioning and Purge CSS

## Versioned Assets (production)

Versioned assets will appear in a `build` directory alongside a manifest file which is used while
[enqueuing scripts and styles](https://github.com/mishterk/wp-laravel-mix-theme-boilerplate/blob/master/includes/scripts-and-styles.php).
This saves you the need to adjust version parameters on your assets and makes it possible to remove parameters on
asset URLs without losing the ability to force those assets to update in browsers. 😁👍

## Purge CSS (production)

Purge CSS is pretty darn excellent and is used to strip out any CSS that isn't being used during the production build.

It does this by looking through specified template files to work out which CSS selectors have been used. If it can't
find a CSS rule being used in the templates, it removes it from the final CSS.

See the `paths` option in the `mix.purgeCss()` invocation in `webpack.mix.js` for the file paths being looked at.

## How to tell Purge CSS to ignore things?

### Why is this important!

If you use dynamic classes then purgeCSS will nuke them in prod build.
Same as third party injected styles. If you getting caught out by this there is a great article explaining it [here](https://www.viget.com/articles/a-better-approach-for-using-purgecss-with-tailwind/).

The easiest way is to delineate your CSS with comments as per the example below. See
[purgeCSS whitelisting](https://github.com/FullHuman/purgecss/blob/5314e41edf328e2ad2639549e1587b82a964a42e/docs/whitelisting.md) for more options.

```css
/* purgecss start ignore */
h1 {
	color: blue;
}

h3 {
	color: green;
}
/* purgecss end ignore */
```

## Deployment

WIP: TODO: currently using git actions to git-ftp for CI/CD. It runs the `npm run prod` script ready to deploy. It is then deployed to the staging/production dependent of which branch. Master is only built on PR from staging.
