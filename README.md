# Auto-Linker


Wrap the text to be formatted within the plugin tags, like so:

    {exp:auto_linker}

        text you want processed

    {/exp:auto_linker}

or...

    {exp:auto_linker}

        {custom_field}

    {/exp:auto_linker}


Note: Mailto links created for email addresses use an obfuscated version of the mailto tag containing ordinal numbers written with JavaScript to help prevent the email address from being harvested by spam bots.

## Optional Parameters

target="blank"
- Links will open in a new window.

convert=""
- Set to "url" to only convert URLs.
- Set to "email" to only convert email addresses.


Version 2.0
******************
- Simplified plugin to use the auto_link() function from CodeIgniter's URL helper.
- New optional parameter to choose to auto-link only URLs or email addresses.

Version 1.1
******************
- Updated plugin to be 2.0 compatible
