=== Pokemon Card Scan Linker ===
Contributors: AdamCapriola
Donate link: http://pkmncards.com/
Tags: pokemon, tcg, cards, linker, scans, search, replace, content
Requires at least: 3.3.1
Tested up to: 3.4.1
Stable tag: 1.1.9

Automatically links Pokemon card names within your articles to provide a convenient reference scan for your readers.

== Description ==

*Pokemon Card Scan Linker* searches your content for mentions of Pokemon cards, then links them to the [PkmnCards.com](http://pkmncards.com/) database and provides an elegant reference scan for each card, along with its rating, pricing, and discussion.

It can be customized to limit the number of times cards are linked within your articles, and deck lists can be specifically targeted to make sure they are fully linked.

Also included is a spell checker for commonly misspelled Pokemon TCG terms, which helps the plugin to better target cards and link 'em.

You can see the plugin in action on the following sites...

* [SixPrizes](http://www.sixprizes.com)
* [OneHitKO](http://www.onehitko.com/)
* [ProPokemon](http://www.propokemon.com/)

**Features**

* Spell Check
* Standard Linker
* Deck List Linker
* Deck List Button
* Comments Linker

As a disclaimer, some of the pricing links that display are affiliate links, which help keep PkmnCards and the development of this plugin chugging along.

== Installation ==

1. Upload `pkmn-linker` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to *Settings > Pokemon Card Linker* and configure the plugin settings

== Frequently Asked Questions ==

= How does the plugin magically link the cards? =

Basically, it does a search and replace. It searches for strings of text, like 'Magnezone Prime' for example, then replaces that plain string of text with a linked string of text.

This means that each and every card has its own entry in the plugin... and we are at over 6,000 cards inputted so far!

= Why aren't my cards linking? =

First, make sure you've configured the plugin settings correctly so that linking is enabled.

Second, clear your cache if you using a cacheing plugin. It's highly recommended you use a cacheing plugin in conjuction with Pokemon Card Scan Linker, by the way, to reduce server load.

If it still isn't fully working, then it's probably because you aren't using the correct naming structure for your cards.

= How should I type out card names? =

Visit [this page](http://pkmncards.com/plugins/wordpress/) for full instructions and a list of caveats, but in a nutshell...

For **Pokemon**, here's the general naming structure:

`[Pokemon Name] [Set Abbreviation] [Card Number]`

Card Number is semi-required... I'll explain in a second. 

So for example, if you want Durant from Noble Victories to link, you would type this:

`Durant NVI`

No number is needed since there is only 1 Durant in Noble Victories, but if there were 2, then you would need to put the card number in order to differentiate the two versions, like so:

`Durant NVI 83`

For **Trainers** and **Energy**, just type out the exact text written on the card. No set or number needed. Easy.

**Capitalization is important.** If you don't capitalize, then the cards won't link (and your readers will think you have poor grammar skills).

For a listing of set abbreviations, visit [this page](http://pkmncards.com/sets/) (they're located in the parentheses).

= Why do I have to use your naming system? =

1. It helps standardize the way Pokemon card names are typed out across the web, making it easier for Pokemon TCG readers to understand which cards you're talking about.
1. The plugin isn't clairvoyant... you need to match the strings saved in the plugin's database for it to work. If requested, we can make adjustments to the saved strings, but for the most part, you'll need to become comfortable with our naming system.

= What does the Spell Check do? =

It searches for commonly misspelled Pokemon TCG terms and replaces them with the correct spelling. So for example, it will change all instances of Ninetails to Ninetales.

This helps to make sure that your cards get linked.

= What does the Standard Linker do? =

When it comes across a Pokemon card in your article, it links it the number of times you specify. 

If you select *1*, it will replace Magnezone Prime (for example) the first time it's mentioned, but ignore any subsequent mentions. If you select *2*, it will replace Magnezone Prime the first 2 mentions of the card. If you select *Every*, it will replace the card every time it's mentioned.

= What does the Comments Linker do? =

It inherits the settings from the Spell Check and Standard Linker to link card mentions in your comments as well. It only works if you use the default WordPress commenting system though (i.e. not Disqus or Facebook).

= What does the Deck List Linker do? =

It attempts to link entire deck lists, otherwise your deck lists will look patchy unless you select *Every* with the Standard Linker.

For this to work, your deck lists must be between specific HTML tags. Normally cards you mention will be between `<p></p>` tags, and the Deck List Linker will try to ignore those. Instead, if your deck lists are in table form, between `<td></td>` tags, or inside a `<div>`, then it can target those card mentions and link all of them while leaving the rest of your article untouched.

There cannot be any other HTML tag between the selected tag and your card names though. For example, if your deck lists were typed like this:

`<td>
<p>Pokemon - 8</p>
<p>4 Pikachu BLW</p>
<p>4 Raichu Prime</p>
</td>`

It would not work. This would work though:

`<td>
<p>Pokemon - 8</p>
4 Pikachu BLW
<br />
4 Raichu Prime
</td>`

Copacetic? The cards must be directly between the specified HTML tags.

= Can I change the way the links look? =

Yes! The appearance of the links is controlled by the 'scan-link' CSS class. Here is example CSS for the way the links are styled on [SixPrizes](http://www.sixprizes.com/):

`.scan-link { color: #222; border-bottom: 1px dashed #222; text-decoration: none }

.scan-link:hover { color: #01BCB5; border-bottom-color: #01BCB5; text-decoration: none; cursor: -webkit-zoom-in; cursor: -moz-zoom-in }`

You can obviously customize the colors to match your site.

= What is the Deck List Button option? =

It adds a button to the WordPress visual editor that will generate a blank deck list template when you click it. It saves a lot of time over typing out code each time you want to insert a stylized deck list into your posts!

= Can I customize the style of the deck list? = 

Sure! This is the default CSS; feel free to make adjustments to better match your site:

`table.pkmn-deck-list {
	-webkit-box-shadow: #CCC 0 2px 5px;
	-moz-box-shadow: #CCC 0 2px 5px;
	box-shadow: #CCC 0 2px 5px;
	border-collapse: collapse;
	margin: 0 0 15px;
	width: 100%
}

table.pkmn-deck-list td {
	border: 1px solid black;
	padding: 10px 15px 25px;
	vertical-align: top;
	width: 33%
}

table.pkmn-deck-list p {
	margin: 0;
}

.pkmn-deck-list-head, .pkmn-deck-list strong {
	display: block;
	margin: 0 0 15px
}`

= How can I support the plugin? =

Just use it... some of the pricing links are affiliate links, which help keep PkmnCards and the development of this plugin chugging along.

== Screenshots ==

1. Plugin off...
2. Plugin on! These card names were all automatically linked - how cool is that?
3. This is the overlay that displays when a linked card is clicked.
4. Settings page. Configure the plugin options here.

== Changelog ==

= 1.1.9 =
* Added Boundaries Crossed and Dragon Vault. Also streamlined one of the regexes so it should load faster.

= 1.1.8 =
* Removed all non-legal cards (PK through CL) to help with performance issues. Should load a lot faster now.

= 1.1.7 =
* Dragons Exalted added! Use the abbreviation DRX.

= 1.1.6 =
* Small change in ajax connection to PkmnCards.com

= 1.1.5 =
* Dark Explorers (finally!)

= 1.1.4 =
* Added a few old cards (Queendom stuff)

= 1.1.3 =
* Fixed broken Red Gyarados link
* Learned official Next Destinies abbreviation is NXD and not NDE, so that's been changed in all the links

= 1.1.2 =
* Fixed Poke Blower, Drawer, and Healer + regexes
* Added DarMAXitan
* Fixed Weedle GE broken link
* Added Manectric ex

= 1.1.1 =
* Changed the way API calls are made to make them more secure
* Started a section to include some older cards that get mentioned somewhat often (Pidgeot RG)
* Fixed broken Power Keepers deck list regexes

= 1.1.0 =
* Fixed broken Machop TM link
* Sorta fixed Metal/Darkness Energy regexes
* Added Battle City
* Added FSL abbreviation (Flower Shop Lady)

= 1.0.9 =
* Fixed a few broken links (Unown DARK, Unown CURE, Unown RETURN, and Unown FLASH)

= 1.0.8 =
* Added Home URL to API request so it can be tracked which sites are using the plugin and how many requests are being made

= 1.0.7 =
* Added Comments Linker feature! Links card mentions in comments too.
* Added 'Cinccino' misspellings to Spell Check

= 1.0.6 =
* Added Deck List Button! Auto-generates a blank deck list template when you're typing out posts

= 1.0.5 =
* Added missing Energy cards
* Moved filters to fire off before `wptexturize` which was causing issues with linking cards that have apostrophes in their name (like Professor Oak's New Theory)
* Fixed broken Black & White Promos
* Added set names to Spell Check to make Linker replacements more efficient
* Added 'Amoonguss' to Spell Check (commonly misspelled 'Amoongus')
* Fixed Pokemon Center so it will link if spelled with the accented 'e' as well

= 1.0.4 =
* All broken LEGEND card links fixed

= 1.0.3 =
* Fixed admin FAQ link
* Made some terms more flexible (like Juniper, Collector, Sage, and Communication will now link)
* Added to FAQ (how to style links)
* Overlay CSS refined further to be more consistent across sites

= 1.0.2 =
* Fixed broken loading graphic (using `wp_localize_script`)
* Defined version number in 'pkmn-linker.php'
* Used the version number for tagging the JS and CSS files
* Cleaned up CSS for a more consistent overlay display across sites

= 1.0.1 =
* Removed some extraneous files that were left over from development.

= 1.0 =
* First release of the plugin!
* Power Keepers through Next Destinies are accounted for.

== Upgrade Notice ==

= 1.1.9 =
* Added Boundaries Crossed and Dragon Vault. Also streamlined one of the regexes so it should load faster.

= 1.1.8 =
* Removed all non-legal cards (PK through CL) to help with performance issues. Should load a lot faster now.

= 1.1.7 =
* Dragons Exalted added! Use the abbreviation DRX.

= 1.1.6 =
* Small change in ajax connection to PkmnCards.com

= 1.1.5 =
* Dark Explorers (finally!)

= 1.1.4 =
* Added a few old cards (Queendom stuff)

= 1.1.3 =
* Changed all Next Destinies cards to have their official abbreviation, NXD, and not NDE.
* Fixed broken Red Gyarados link.

= 1.1.2 =
* Fixed a couple broken links, added DarMAXitan and Manectric ex

= 1.1.1 =
* Changed the way API calls are made to make them more secure
* Started a section to include some older cards that get mentioned somewhat often (Pidgeot RG)
* Fixed broken Power Keepers deck list regexes

= 1.1.0 =
* Adds Battle City, FSL (Flower Shop Lady) abbreviation, fixes broken Machop TM link, and sorta fixes Darkness/Metal Energies

= 1.0.9 =
* Fixes a few broken links (Unown DARK, Unown CURE, Unown RETURN, and Unown FLASH)

= 1.0.8 =
* Very minor update to add tracking and monitor how many API requests are being made by all the sites using this plugin

= 1.0.7 =
* New Comments Linker option - you can link card mentions in your comments too.
* Adds 'Cinccino' misspellings to Spell Check

= 1.0.6 =
* Added Deck List Button! Auto-generates a blank deck list template when you're typing out posts (super convenient)

= 1.0.5 =
* Fixed a lot of broken links, added some terms to spell check, added missing Energy cards, and made linkers more efficient

= 1.0.4 =
* Fixes all broken LEGEND card links.

= 1.0.3 =
* Fixes broken admin FAQ link, more flexible terms (like Juniper, Collector, etc), how to style links in FAQ, and overlay CSS more consistent across sites.

= 1.0.2 =
* Fixes broken loading graphic.

= 1.0.1 =
* Deleted a couple extraneous files there were left over from development. No biggie.

= 1.0 =
* First release... you can't upgrade.