# pivotal

A tool to print tickets from pivotal using pivotal api.

## How to install

- Run `$ composer install`

## How to use

- Change the constant `TOKEN` to your api token, fund under [your profile](https://www.pivotaltracker.com/profile) in pivotal
- Change the constant `STORIES_QUERY` reflect the ticket IDs you wish to print. (example:`'?filter=id:156436834,156424287,156421119,156420857,156421331,151671139'`)
- Run `$ php -S localhost:4000` to host the tool.
- Prepare an A4 page with the post it notes and put it in the printer with the correct orientation, depending on the printer (notes facing upwards on the `HP LaserJet 400`)
- Print the page
