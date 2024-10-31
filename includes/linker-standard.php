<?php
//
// Standard Linker
//
// Link card names to corresponding page on PkmnCards.com the number of times specified on settings page
//
//

//
// Content Filter
//
add_filter( 'the_content', 'pkmn_linker_standard_content', 8 );

function pkmn_linker_standard_content($content) {

	// Get settings
	$linker_standard = pkmn_linker_get_setting('linker_standard');
	
	// If it's a post and standard linker is enabled...
	if ( is_singular('post') && !empty($linker_standard) ) {
		
		// Get array of both search/replace terms
		$array = pkmn_linker_standard();
		
		// Create separate search/replace arrays
		$search = $array[ 'search' ];
		$replace = $array[ 'replace' ];
		
		// Do replace
		if ( $linker_standard == 'Every' )
			$content = preg_replace( $search, $replace, $content );
		else
			$content = preg_replace( $search, $replace, $content, $linker_standard );
	
	}
	
	return $content;
	
}

//
// Comments Filter
//
add_filter( 'comment_text', 'pkmn_linker_standard_comments', 8 );

function pkmn_linker_standard_comments($content) {
	
	// Get comments linker settings
	$linker_comments = pkmn_linker_get_setting('linker_comments');
	
	// If it's enabled, proceed...
	if ( !empty($linker_comments) ) {
		
		// Get standard linker setting
		$linker_standard = pkmn_linker_get_setting('linker_standard');
		
		// If standard linker is enabled and we're on a post, do it
		if ( !empty($linker_standard) && is_singular('post') ) {
			
			// Get array of both search/replace terms
			$array = pkmn_linker_standard();
			
			// Create separate search/replace arrays
			$search = $array[ 'search' ];
			$replace = $array[ 'replace' ];
			
			if ( $linker_standard == 'Every' )
				$content = preg_replace( $search, $replace, $content );
			else
				$content = preg_replace( $search, $replace, $content, $linker_standard );
		
		}
	
	}
	
	return $content;
	
}

//
// Search/Replace Terms
//
function pkmn_linker_standard() {

		//
		// Boundaries Crossed
		//
		
		$search[] = '/\b(Oddish.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/oddish-boundaries-crossed-bcr-1/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Gloom.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gloom-boundaries-crossed-bcr-2/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Vileplume.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vileplume-boundaries-crossed-bcr-3/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Bellossom.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bellossom-boundaries-crossed-bcr-4/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Tangela.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tangela-boundaries-crossed-bcr-5/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Tangrowth.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tangrowth-boundaries-crossed-bcr-6/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Scyther.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scyther-boundaries-crossed-bcr-7/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Heracross.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/heracross-boundaries-crossed-bcr-8/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Celebi.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/celebi-ex-boundaries-crossed-bcr-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Shaymin.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shaymin-boundaries-crossed-bcr-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Snivy.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/snivy-boundaries-crossed-bcr-11/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Servine.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/servine-boundaries-crossed-bcr-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Serperior.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/serperior-boundaries-crossed-bcr-13/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Cottonee.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cottonee-boundaries-crossed-bcr-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Whimsicott.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/whimsicott-boundaries-crossed-bcr-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Petilil.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/petilil-boundaries-crossed-bcr-16/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Lilligant.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lilligant-boundaries-crossed-bcr-17/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Charmander.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/charmander-boundaries-crossed-bcr-18/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Charmeleon.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/charmeleon-boundaries-crossed-bcr-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Charizard.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/charizard-boundaries-crossed-bcr-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Numel.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/numel-boundaries-crossed-bcr-21/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Camerupt.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/camerupt-boundaries-crossed-bcr-22/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Victini.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/victini-boundaries-crossed-bcr-23/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Tepig.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tepig-boundaries-crossed-bcr-24/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Pignite.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pignite-boundaries-crossed-bcr-25/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Emboar.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/emboar-boundaries-crossed-bcr-26/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Darumaka.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darumaka-boundaries-crossed-bcr-27/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Darmanitan.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darmanitan-boundaries-crossed-bcr-28/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Squirtle.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/squirtle-boundaries-crossed-bcr-29/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Wartortle.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/wartortle-boundaries-crossed-bcr-30/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Blastoise.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blastoise-boundaries-crossed-bcr-31/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Psyduck.{1,2}BCR.{1,2}#?32)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/psyduck-boundaries-crossed-bcr-32/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Psyduck.{1,2}BCR.{1,2}#?33)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/psyduck-boundaries-crossed-bcr-33/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Golduck.{1,2}BCR.{1,2}#?34)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/golduck-boundaries-crossed-bcr-34/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Golduck.{1,2}BCR.{1,2}#?35)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/golduck-boundaries-crossed-bcr-35/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Marill.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/marill-boundaries-crossed-bcr-36/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Azumarill.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/azumarill-boundaries-crossed-bcr-37/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Delibird.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/delibird-boundaries-crossed-bcr-38/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Oshawott.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/oshawott-boundaries-crossed-bcr-39/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dewott.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dewott-boundaries-crossed-bcr-40/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Samurott.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/samurott-boundaries-crossed-bcr-41/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Ducklett.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ducklett-boundaries-crossed-bcr-42/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Swanna.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swanna-boundaries-crossed-bcr-43/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Frillish.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/frillish-boundaries-crossed-bcr-44/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Jellicent.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/jellicent-boundaries-crossed-bcr-45/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Cryogonal.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cryogonal-boundaries-crossed-bcr-46/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Keldeo.{1,2}BCR.{1,2}#?47)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/keldeo-boundaries-crossed-bcr-47/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Keldeo.{1,2}BCR.{1,2}#?48)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/keldeo-boundaries-crossed-bcr-48/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Keldeo.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/keldeo-ex-boundaries-crossed-bcr-49/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Pikachu.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pikachu-boundaries-crossed-bcr-50/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Voltorb.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/voltorb-boundaries-crossed-bcr-51/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Electrode.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/electrode-boundaries-crossed-bcr-52/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Electabuzz.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/electabuzz-boundaries-crossed-bcr-53/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Electivire.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/electivire-boundaries-crossed-bcr-54/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Chinchou.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/chinchou-boundaries-crossed-bcr-55/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Blitzle.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blitzle-boundaries-crossed-bcr-56/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Zebstrika.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zebstrika-boundaries-crossed-bcr-57/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Wobbuffet.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/wobbuffet-boundaries-crossed-bcr-58/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Spoink.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/spoink-boundaries-crossed-bcr-59/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Grumpig.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/grumpig-boundaries-crossed-bcr-60/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Duskull.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/duskull-boundaries-crossed-bcr-61/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dusclops.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dusclops-boundaries-crossed-bcr-62/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dusknoir.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dusknoir-boundaries-crossed-bcr-63/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Croagunk.{1,2}BCR.{1,2}#?64)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/croagunk-boundaries-crossed-bcr-64/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Croagunk.{1,2}BCR.{1,2}#?65)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/croagunk-boundaries-crossed-bcr-65/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Toxicroak.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/toxicroak-boundaries-crossed-bcr-66/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Cresselia.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cresselia-ex-boundaries-crossed-bcr-67/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Munna.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/munna-boundaries-crossed-bcr-68/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Musharna.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/musharna-boundaries-crossed-bcr-69/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Woobat.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/woobat-boundaries-crossed-bcr-70/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Swoobat.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swoobat-boundaries-crossed-bcr-71/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Venipede.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/venipede-boundaries-crossed-bcr-72/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Whirlipede.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/whirlipede-boundaries-crossed-bcr-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Scolipede.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scolipede-boundaries-crossed-bcr-74/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Gothita.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothita-boundaries-crossed-bcr-75/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Gothorita.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothorita-boundaries-crossed-bcr-76/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Meloetta.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/meloetta-boundaries-crossed-bcr-77/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Sandshrew.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sandshrew-boundaries-crossed-bcr-78/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Sandslash.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sandslash-boundaries-crossed-bcr-79/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Gligar.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gligar-boundaries-crossed-bcr-80/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Gliscor.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gliscor-boundaries-crossed-bcr-81/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Makuhita.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/makuhita-boundaries-crossed-bcr-82/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Trapinch.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/trapinch-boundaries-crossed-bcr-83/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dwebble.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dwebble-boundaries-crossed-bcr-84/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Crustle.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/crustle-boundaries-crossed-bcr-85/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Mienfoo.{1,2}BCR.{1,2}#?86)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mienfoo-boundaries-crossed-bcr-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Mienfoo.{1,2}BCR.{1,2}#?87)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mienfoo-boundaries-crossed-bcr-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Mienshao.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mienshao-boundaries-crossed-bcr-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Landorus.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/landorus-ex-boundaries-crossed-bcr-89/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Purrloin.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/purrloin-boundaries-crossed-bcr-90/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Liepard.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/liepard-boundaries-crossed-bcr-91/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Vullaby.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vullaby-boundaries-crossed-bcr-92/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Mandibuzz.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mandibuzz-boundaries-crossed-bcr-93/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Scizor.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scizor-boundaries-crossed-bcr-94/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Skarmory.{1,2}BCR.{1,2}#?95)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/skarmory-boundaries-crossed-bcr-95/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Skarmory.{1,2}BCR.{1,2}#?96)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/skarmory-boundaries-crossed-bcr-96/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Klink.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klink-boundaries-crossed-bcr-97/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Vibrava.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vibrava-boundaries-crossed-bcr-98/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Flygon.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/flygon-boundaries-crossed-bcr-99/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Black.{1,2}Kyurem.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/black-kyurem-ex-boundaries-crossed-bcr-101/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Black.{1,2}Kyurem)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/black-kyurem-boundaries-crossed-bcr-100/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(White.{1,2}Kyurem.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/white-kyurem-ex-boundaries-crossed-bcr-103/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(White.{1,2}Kyurem)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/white-kyurem-boundaries-crossed-bcr-102/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Rattata.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rattata-boundaries-crossed-bcr-104/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Raticate.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/raticate-boundaries-crossed-bcr-105/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Meowth.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/meowth-boundaries-crossed-bcr-106/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Farfetch\'d.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/farfetchd-boundaries-crossed-bcr-107/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Ditto.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ditto-boundaries-crossed-bcr-108/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Snorlax.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/snorlax-boundaries-crossed-bcr-109/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Togepi.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/togepi-boundaries-crossed-bcr-110/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dunsparce.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dunsparce-boundaries-crossed-bcr-111/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Taillow.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/taillow-boundaries-crossed-bcr-112/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Skitty.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/skitty-boundaries-crossed-bcr-113/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Delcatty.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/delcatty-boundaries-crossed-bcr-114/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Spinda.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/spinda-boundaries-crossed-bcr-115/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Buneary.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/buneary-boundaries-crossed-bcr-116/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Lopunny.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lopunny-boundaries-crossed-bcr-117/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Patrat.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/patrat-boundaries-crossed-bcr-118/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Watchog.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/watchog-boundaries-crossed-bcr-119/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Lillipup.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lillipup-boundaries-crossed-bcr-120/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Herdier.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/herdier-boundaries-crossed-bcr-121/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Stoutland.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/stoutland-boundaries-crossed-bcr-122/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Pidove.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pidove-boundaries-crossed-bcr-123/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Tranquill.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tranquill-boundaries-crossed-bcr-124/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Unfezant.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/unfezant-boundaries-crossed-bcr-125/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Audino.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/audino-boundaries-crossed-bcr-126/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Aspertia.{1,2}City.{1,2}Gym)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/aspertia-city-gym-boundaries-crossed-bcr-127/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Energy.{1,2}Search)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/energy-search-boundaries-crossed-bcr-128/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Great.{1,2}Ball)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/great-ball-boundaries-crossed-bcr-129/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Hugh)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hugh-boundaries-crossed-bcr-130/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Pok.{1,2}.{1,2}Ball)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/poke-ball-boundaries-crossed-bcr-131/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b((?<!Max.|Gold.)Potion)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/potion-boundaries-crossed-bcr-132/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Rocky.{1,2}Helmet)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rocky-helmet-boundaries-crossed-bcr-133/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Skyla.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/skyla-boundaries-crossed-bcr-134/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b((?<!Energy.)Switch)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/switch-boundaries-crossed-bcr-135/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Town.{1,2}Map)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/town-map-boundaries-crossed-bcr-136/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Computer.{1,2}Search)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/computer-search-boundaries-crossed-bcr-137/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Crystal.{1,2}Edge)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/crystal-edge-boundaries-crossed-bcr-138/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Crystal.{1,2}Wall)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/crystal-wall-boundaries-crossed-bcr-139/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Gold.{1,2}Potion)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gold-potion-boundaries-crossed-bcr-140/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Golurk.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/golurk-boundaries-crossed-bcr-150/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Terrakion.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/terrakion-boundaries-crossed-bcr-151/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Altaria.{1,2}BCR)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/altaria-boundaries-crossed-bcr-152/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		//
		// Dragon Vault
		//
		
		$search[] = '/\b(Dratini.{1,2}DRV.{1,2}#?1)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dratini-dragon-vault-drv-1/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dratini.{1,2}DRV.{1,2}#?2)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dratini-dragon-vault-drv-2/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dragonair.{1,2}DRV.{1,2}#?3)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dragonair-dragon-vault-drv-3/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dragonair.{1,2}DRV.{1,2}#?4)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dragonair-dragon-vault-drv-4/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Dragonite.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dragonite-dragon-vault-drv-5/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Bagon.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bagon-dragon-vault-drv-6/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Shelgon.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shelgon-dragon-vault-drv-7/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Salamence.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/salamence-dragon-vault-drv-8/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Latias.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/latias-dragon-vault-drv-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Latios.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/latios-dragon-vault-drv-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Rayquaza.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rayquaza-dragon-vault-drv-11/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Axew.{1,2}DRV.{1,2}#?12)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/axew-dragon-vault-drv-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Axew.{1,2}DRV.{1,2}#?13)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/axew-dragon-vault-drv-13/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Fraxure.{1,2}DRV.{1,2}#?14)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/fraxure-dragon-vault-drv-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Fraxure.{1,2}DRV.{1,2}#?15)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/fraxure-dragon-vault-drv-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Haxorus.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/haxorus-dragon-vault-drv-16/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Druddigon.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/druddigon-dragon-vault-drv-17/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		//$search[] = '/\b(Exp\..{1,2}Share)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/exp-share-dragon-vault-drv-18/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(First.{1,2}Ticket)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/first-ticket-dragon-vault-drv-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		//$search[] = '/\b(Super.{1,2}Rod)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/super-rod-dragon-vault-drv-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		$search[] = '/\b(Kyurem.{1,2}DRV)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/kyurem-dragon-vault-drv-21/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';

		//
		// Dragons Exalted
		//
		
		$search[] = '/\b(Hoppip.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hoppip-dragons-exalted-drx-1/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Skiploom.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/skiploom-dragons-exalted-drx-2/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Jumpluff.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/jumpluff-dragons-exalted-drx-3/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Yanma.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/yanma-dragons-exalted-drx-4/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Yanmega.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/yanmega-dragons-exalted-drx-5/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Wurmple.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/wurmple-dragons-exalted-drx-6/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Silcoon.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/silcoon-dragons-exalted-drx-7/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Beautifly.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/beautifly-dragons-exalted-drx-8/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cascoon.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cascoon-dragons-exalted-drx-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Nincada.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/nincada-dragons-exalted-drx-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ninjask.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ninjask-dragons-exalted-drx-11/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Roselia.{1,2}DRX.{1,2}#?12)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/roselia-dragons-exalted-drx-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Roselia.{1,2}DRX.{1,2}#?13)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/roselia-dragons-exalted-drx-13/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Roserade.{1,2}DRX.{1,2}#?14)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/roserade-dragons-exalted-drx-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Roserade.{1,2}DRX.{1,2}#?15)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/roserade-dragons-exalted-drx-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Maractus.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/maractus-dragons-exalted-drx-16/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Foongus.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/foongus-dragons-exalted-drx-17/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vulpix.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vulpix-dragons-exalted-drx-18/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ninetales.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ninetales-dragons-exalted-drx-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Magmar.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/magmar-dragons-exalted-drx-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Magmortar.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/magmortar-dragons-exalted-drx-21/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ho-Oh.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/i';
		$replace[] = '<a href="http://pkmncards.com/card/ho-oh-ex-dragons-exalted-drx-22/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Magikarp.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/magikarp-dragons-exalted-drx-23/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gyarados.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gyarados-dragons-exalted-drx-24/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Wailmer.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/wailmer-dragons-exalted-drx-25/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Wailord.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/wailord-dragons-exalted-drx-26/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Feebas.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/feebas-dragons-exalted-drx-27/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Milotic.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/milotic-dragons-exalted-drx-28/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Spheal.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/spheal-dragons-exalted-drx-29/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sealeo.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sealeo-dragons-exalted-drx-30/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Walrein.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/walrein-dragons-exalted-drx-31/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Buizel.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/buizel-dragons-exalted-drx-32/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Floatzel.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/floatzel-dragons-exalted-drx-33/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tympole.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tympole-dragons-exalted-drx-34/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Palpitoad.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/palpitoad-dragons-exalted-drx-35/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Seismitoad.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/seismitoad-dragons-exalted-drx-36/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Alomomola.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/alomomola-dragons-exalted-drx-37/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mareep.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mareep-dragons-exalted-drx-38/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Flaaffy.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/flaaffy-dragons-exalted-drx-39/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ampharos.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ampharos-dragons-exalted-drx-40/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Electrike.{1,2}DRX.{1,2}#?41)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/electrike-dragons-exalted-drx-41/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Electrike.{1,2}DRX.{1,2}#?42)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/electrike-dragons-exalted-drx-42/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Manectric.{1,2}DRX.{1,2}#?43)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/manectric-dragons-exalted-drx-43/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Manectric.{1,2}DRX.{1,2}#?44)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/manectric-dragons-exalted-drx-44/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Emolga.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/emolga-dragons-exalted-drx-45/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mew.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mew-ex-dragons-exalted-drx-46/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Dustox.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dustox-dragons-exalted-drx-47/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Shedinja.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shedinja-dragons-exalted-drx-48/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Drifloon.{1,2}DRX.{1,2}#?49)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/drifloon-dragons-exalted-drx-49/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Drifloon.{1,2}DRX.{1,2}#?50)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/drifloon-dragons-exalted-drx-50/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Drifblim.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/drifblim-dragons-exalted-drx-51/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sigilyph.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sigilyph-dragons-exalted-drx-52/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Trubbish.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/trubbish-dragons-exalted-drx-53/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Garbodor.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/garbodor-dragons-exalted-drx-54/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothita.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothita-dragons-exalted-drx-55/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothorita.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothorita-dragons-exalted-drx-56/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothitelle.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothitelle-dragons-exalted-drx-57/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Golett.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/golett-dragons-exalted-drx-58/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Golurk.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/golurk-dragons-exalted-drx-59/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cubone.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cubone-dragons-exalted-drx-60/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Marowak.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/marowak-dragons-exalted-drx-61/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Nosepass.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/nosepass-dragons-exalted-drx-62/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Baltoy.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/baltoy-dragons-exalted-drx-63/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Claydol.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/claydol-dragons-exalted-drx-64/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Roggenrola.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/roggenrola-dragons-exalted-drx-65/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Boldore.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/boldore-dragons-exalted-drx-66/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gigalith.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gigalith-dragons-exalted-drx-67/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Throh.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/throh-dragons-exalted-drx-68/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sawk.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sawk-dragons-exalted-drx-69/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Stunfisk.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/stunfisk-dragons-exalted-drx-70/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Terrakion.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/terrakion-ex-dragons-exalted-drx-71/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Murkrow.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/murkrow-dragons-exalted-drx-72/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Honchkrow.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/honchkrow-dragons-exalted-drx-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Houndour.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/houndour-dragons-exalted-drx-74/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Houndoom.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/houndoom-dragons-exalted-drx-75/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Stunky.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/stunky-dragons-exalted-drx-76/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Skuntank.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/skuntank-dragons-exalted-drx-77/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Aron.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/aron-dragons-exalted-drx-78/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lairon.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lairon-dragons-exalted-drx-79/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Aggron.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/aggron-dragons-exalted-drx-80/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Registeel.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/registeel-ex-dragons-exalted-drx-81/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Probopass.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/probopass-dragons-exalted-drx-82/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Durant.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/durant-dragons-exalted-drx-83/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Altaria.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/altaria-dragons-exalted-drx-84/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rayquaza.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rayquaza-ex-dragons-exalted-drx-85/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gible.{1,2}DRX.{1,2}#?86)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gible-dragons-exalted-drx-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gible.{1,2}DRX.{1,2}#?87)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gible-dragons-exalted-drx-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gabite.{1,2}DRX.{1,2}#?88)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gabite-dragons-exalted-drx-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gabite.{1,2}DRX.{1,2}#?89)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gabite-dragons-exalted-drx-89/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Garchomp.{1,2}DRX.{1,2}#?90)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/garchomp-dragons-exalted-drx-90/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Garchomp.{1,2}DRX.{1,2}#?91)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/garchomp-dragons-exalted-drx-91/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Giratina.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/giratina-ex-dragons-exalted-drx-92/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Deino.{1,2}DRX.{1,2}#?93)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/deino-dragons-exalted-drx-93/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Deino.{1,2}DRX.{1,2}#?94)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/deino-dragons-exalted-drx-94/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zweilous.{1,2}DRX.{1,2}#?95)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zweilous-dragons-exalted-drx-95/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zweilous.{1,2}DRX.{1,2}#?96)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zweilous-dragons-exalted-drx-96/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Hydreigon.{1,2}DRX.{1,2}#?97)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hydreigon-dragons-exalted-drx-97/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Hydreigon.{1,2}DRX.{1,2}#?98)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hydreigon-dragons-exalted-drx-98/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Aipom.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/aipom-dragons-exalted-drx-99/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ambipom.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ambipom-dragons-exalted-drx-100/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Slakoth.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/slakoth-dragons-exalted-drx-101/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vigoroth.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vigoroth-dragons-exalted-drx-102/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Slaking.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/slaking-dragons-exalted-drx-103/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swablu.{1,2}DRX.{1,2}#?104)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swablu-dragons-exalted-drx-104/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swablu.{1,2}DRX.{1,2}#?105)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swablu-dragons-exalted-drx-105/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bidoof.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bidoof-dragons-exalted-drx-106/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bibarel.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bibarel-dragons-exalted-drx-107/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Audino.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/audino-dragons-exalted-drx-108/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Minccino.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/minccino-dragons-exalted-drx-109/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bouffalant.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bouffalant-dragons-exalted-drx-110/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rufflet.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rufflet-dragons-exalted-drx-111/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Braviary.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/braviary-dragons-exalted-drx-112/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Devolution.{1,2}Spray)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/devolution-spray-dragons-exalted-drx-113/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Giant.{1,2}Cape)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/giant-cape-dragons-exalted-drx-114/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rescue.{1,2}Scarf)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rescue-scarf-dragons-exalted-drx-115/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tool.{1,2}Scrapper)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tool-scrapper-dragons-exalted-drx-116/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Blend.{1,2}(?:Energy.{1,2})?GR?F?PD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blend-energy-grpd-dragons-exalted-drx-117/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Blend.{1,2}(?:Energy.{1,2})?WLFM)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blend-energy-wlfm-dragons-exalted-drx-118/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		/*
		$search[] = '/\b(Ho-Oh.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/i';
		$replace[] = '<a href="http://pkmncards.com/card/ho-oh-ex-dragons-exalted-drx-119/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mew.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mew-ex-dragons-exalted-drx-120/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Terrakion.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/terrakion-ex-dragons-exalted-drx-121/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Registeel.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/registeel-ex-dragons-exalted-drx-122/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rayquaza.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rayquaza-ex-dragons-exalted-drx-123/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Giratina.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/giratina-ex-dragons-exalted-drx-124/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		*/
		
		$search[] = '/\b(Serperior.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/serperior-dragons-exalted-drx-125/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Reuniclus.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/reuniclus-dragons-exalted-drx-126/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Krookodile.{1,2}DRX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/krookodile-dragons-exalted-drx-127/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rayquaza.{1,2}DRX|Shiny.{1,2}Rayquaza)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rayquaza-dragons-exalted-drx-128/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
	
		//
		// Dark Explorers
		//
		
		$search[] = '/\b(Accelgor.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/accelgor-dark-explorers-dex-11/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Aerodactyl.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/aerodactyl-dark-explorers-dex-53/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Archeops.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/archeops-dark-explorers-dex-110/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bisharp.{1,2}DEX.{1,2}#?72)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bisharp-dark-explorers-dex-72/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bisharp.{1,2}DEX.{1,2}#?79)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bisharp-dark-explorers-dex-79/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Blaziken.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blaziken-dark-explorers-dex-17/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Blissey.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blissey-dark-explorers-dex-82/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bulbasaur.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bulbasaur-dark-explorers-dex-1/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Carnivine.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/carnivine-dark-explorers-dex-5/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Chansey.{1,2}DEX.{1,2}#?80)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/chansey-dark-explorers-dex-80/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Chansey.{1,2}DEX.{1,2}#?81)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/chansey-dark-explorers-dex-81/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Chatot.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/chatot-dark-explorers-dex-85/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cheren)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cheren-dark-explorers-dex-91/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cofagrigus.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cofagrigus-dark-explorers-dex-52/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Combusken.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/combusken-dark-explorers-dex-16/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Crustle.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/crustle-dark-explorers-dex-8/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Dark.{1,2}Claw)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dark-claw-dark-explorers-dex-92/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Dark.{1,2}Patch)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dark-patch-dark-explorers-dex-93/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Darkrai.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darkrai-ex-dark-explorers-dex-107/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Drilbur.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/drilbur-dark-explorers-dex-55/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ducklett.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ducklett-dark-explorers-dex-35/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Dwebble.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dwebble-dark-explorers-dex-7/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Eelektrik.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/eelektrik-dark-explorers-dex-46/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Eelektross.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/eelektross-dark-explorers-dex-47/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Eevee.{1,2}DEX.{1,2}#?83)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/eevee-dark-explorers-dex-83/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Eevee.{1,2}DEX.{1,2}#?84)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/eevee-dark-explorers-dex-84/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Empoleon.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/empoleon-dark-explorers-dex-29/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Enhanced.{1,2}Hammer)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/enhanced-hammer-dark-explorers-dex-94/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Entei.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/entei-ex-dark-explorers-dex-103/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Escavalier.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/escavalier-dark-explorers-dex-74/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Espeon.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/espeon-dark-explorers-dex-48/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Excadrill.{1,2}DEX.{1,2}#?56)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/excadrill-dark-explorers-dex-56/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Excadrill.{1,2}DEX.{1,2}#?57)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/excadrill-dark-explorers-dex-57/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Flareon.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/flareon-dark-explorers-dex-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Galvantula.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/galvantula-dark-explorers-dex-43/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gardevoir.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gardevoir-dark-explorers-dex-109/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Glaceon.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/glaceon-dark-explorers-dex-30/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Groudon.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/groudon-ex-dark-explorers-dex-106/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gurdurr.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gurdurr-dark-explorers-dex-59/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Haxorus.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/haxorus-dark-explorers-dex-89/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Heatmor.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/heatmor-dark-explorers-dex-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Herdier.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/herdier-dark-explorers-dex-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Hooligans.{1,2}Jim.{1,2}&(?:amp;).{1,2}Cas)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hooligans-jim-cas-dark-explorers-dex-95/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ivysaur.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ivysaur-dark-explorers-dex-2/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Jolteon.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/jolteon-dark-explorers-dex-37/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Joltik.{1,2}DEX.{1,2}#?41)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/joltik-dark-explorers-dex-41/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Joltik.{1,2}DEX.{1,2}#?42)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/joltik-dark-explorers-dex-42/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Karrablast.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/karrablast-dark-explorers-dex-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klang.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klang-dark-explorers-dex-76/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klink.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klink-dark-explorers-dex-75/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klinklang.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klinklang-dark-explorers-dex-77/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Krokorok.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/krokorok-dark-explorers-dex-65/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Krookodile.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/krookodile-dark-explorers-dex-66/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Kyogre.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/kyogre-ex-dark-explorers-dex-104/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Larvesta.{1,2}DEX.{1,2}#?20)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/larvesta-dark-explorers-dex-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Larvesta.{1,2}DEX.{1,2}#?21)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/larvesta-dark-explorers-dex-21/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Leafeon.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/leafeon-dark-explorers-dex-6/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lillipup.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lillipup-dark-explorers-dex-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Minun.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/minun-dark-explorers-dex-40/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(N)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/n-dark-explorers-dex-96/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Old.{1,2}Amber.{1,2}Aerodactyl)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/old-amber-aerodactyl-dark-explorers-dex-97/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Palpitoad.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/palpitoad-dark-explorers-dex-32/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pawniard.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pawniard-dark-explorers-dex-78/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Piplup.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/piplup-dark-explorers-dex-27/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Plusle.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/plusle-dark-explorers-dex-39/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(Pok.{1,2}mon.{1,2}Catcher|Catcher)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/pokemon-catcher-dark-explorers-dex-111/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gold(?:en)?.{1,2}Catcher)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pokemon-catcher-dark-explorers-dex-111/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Prinplup.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/prinplup-dark-explorers-dex-28/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Professor.{1,2}Juniper|Juniper)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/professor-juniper-dark-explorers-dex-98/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Raikou.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/raikou-ex-dark-explorers-dex-105/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Random.{1,2}Receiver)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/random-receiver-dark-explorers-dex-99/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rare.{1,2}Candy)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rare-candy-dark-explorers-dex-100/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sableye.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sableye-dark-explorers-dex-62/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sandile.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sandile-dark-explorers-dex-64/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scrafty.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scrafty-dark-explorers-dex-68/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scraggy.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scraggy-dark-explorers-dex-67/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scyther.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scyther-dark-explorers-dex-4/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Shelmet.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shelmet-dark-explorers-dex-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Slowbro.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/slowbro-dark-explorers-dex-24/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Slowking.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/slowking-dark-explorers-dex-49/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Slowpoke.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/slowpoke-dark-explorers-dex-23/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Stoutland.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/stoutland-dark-explorers-dex-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swanna.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swanna-dark-explorers-dex-36/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Timburr.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/timburr-dark-explorers-dex-58/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Torchic.{1,2}DEX.{1,2}#?14)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/torchic-dark-explorers-dex-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Torchic.{1,2}DEX.{1,2}#?15)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/torchic-dark-explorers-dex-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Torkaol.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/torkoal-dark-explorers-dex-18/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tornadus.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tornadus-ex-dark-explorers-dex-108/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Twist.{1,2}Mountain)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/twist-mountain-dark-explorers-dex-101/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tympole.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tympole-dark-explorers-dex-31/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tynamo.{1,2}DEX.{1,2}#?44)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tynamo-dark-explorers-dex-44/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tynamo.{1,2}DEX.{1,2}#?45)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tynamo-dark-explorers-dex-45/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ultra.{1,2}Ball)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ultra-ball-dark-explorers-dex-102/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Umbreon.{1,2}DEX.{1,2}#?60)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/umbreon-dark-explorers-dex-60/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Umbreon.{1,2}DEX.{1,2}#?61)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/umbreon-dark-explorers-dex-61/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vanillish.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vanillish-dark-explorers-dex-34/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vanillite.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vanillite-dark-explorers-dex-33/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vaporeon.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vaporeon-dark-explorers-dex-25/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Venusaur.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/venusaur-dark-explorers-dex-3/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Volcarona.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/volcarona-dark-explorers-dex-22/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vullaby.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vullaby-dark-explorers-dex-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Woobat.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/woobat-dark-explorers-dex-50/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Yamask.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/yamask-dark-explorers-dex-51/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zoroark.{1,2}DEX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zoroark-dark-explorers-dex-71/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zorua.{1,2}DEX.{1,2}#?69)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zorua-dark-explorers-dex-69/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zorua.{1,2}DEX.{1,2}#?70)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zorua-dark-explorers-dex-70/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
	
		//
		// Random Old Cards That are Discussed Somewhat Often
		//
		
		$search[] = '/\b(Nidoran.{1,2}F(?:emale)?.{1,2}RG)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/nidoran-female-firered-leafgreen-rg-70/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Nidorina.{1,2}RG)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/nidorina-firered-leafgreen-rg-40/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Nidoqueen.{1,2}RG)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/nidoqueen-firered-leafgreen-rg-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pidgey.{1,2}RG)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pidgey-firered-leafgreen-rg-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pidgeotto.{1,2}RG)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pidgeotto-firered-leafgreen-rg-45/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pidgeot.{1,2}RG)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pidgeot-firered-leafgreen-rg-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Feebas.{1,2}HL)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/feebas-hidden-legends-hl-61/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Milotic.{1,2}HL)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/milotic-hidden-legends-hl-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Celio.{1,3}s.{1,2}Network)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/celios-network-crystal-guardians-cg-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rocket.{1,3}s.{1,2}Admin\.)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rockets-admin-team-rocket-returns-rr-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mr\..{1,2}Briney.{1,3}s.{1,2}Compassion)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mr-brineys-compassion-dragon-dr-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Desert.{1,2}Ruins)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/desert-ruins-hidden-legends-hl-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Double.{1,2}Rainbow(?:.{1,2}Energy)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/double-rainbow-energy-crystal-guardians-cg-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(DRE)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/double-rainbow-energy-crystal-guardians-cg-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Heal.{1,2}Energy)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/heal-energy-deoxys-dx-94/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Manectric.{1,2}ex)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/manectric-ex-deoxys-dx-101/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//
		// Energy
		//
		
		$search[] = '/\b(Grass.{1,2}Energy)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/grass-energy-base-set-bs-99/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Water.{1,2}Energy)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/water-energy-base-set-bs-102/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Fire.{1,2}Energy)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/fire-energy-base-set-bs-98/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lightning.{1,2}Energy)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lightning-energy-base-set-bs-100/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Psychic.{1,2}Energy)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/psychic-energy-base-set-bs-101/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Fighting.{1,2}Energy)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/fighting-energy-base-set-bs-97/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Special.{1,2}Metal(?:.{1,2}Energy)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/metal-energy-call-of-legends-cl-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Basic.{1,2}Metal(?:.{1,2}Energy)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/metal-energy-black-white-blw-112/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Special.{1,2}Dark(?:ness)?(?:.{1,2}Energy)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darkness-energy-call-of-legends-cl-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Basic.{1,2}Dark(?:ness)?(?:.{1,2}Energy)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darkness-energy-black-white-blw-111/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//
		// Next Destinies
		//
		
		$search[] = '/\b(Amoonguss.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/amoonguss-next-destinies-nxd-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Arcanine.{1,2}NXD.{1,2}#?12)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/arcanine-next-destinies-nxd-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Arcanine.{1,2}NXD.{1,2}#?13)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/arcanine-next-destinies-nxd-13/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Articuno.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/articuno-next-destinies-nxd-27/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Basculin.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/basculin-next-destinies-nxd-30/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Beartic.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/beartic-next-destinies-nxd-37/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Beheeyem.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/beheeyem-next-destinies-nxd-62/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Blitzle.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blitzle-next-destinies-nxd-47/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bronzong.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bronzong-next-destinies-nxd-76/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bronzor.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bronzor-next-destinies-nxd-75/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Chandelure.{1,2}NXD.{1,2}#?101)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/chandelure-next-destinies-nxd-101/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Chandelure.{1,2}NXD(?:.{1,2}#?20)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/chandelure-next-destinies-nxd-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cilan)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cilan-next-destinies-nxd-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cinccino.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cinccino-next-destinies-nxd-85/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cubchoo.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cubchoo-next-destinies-nxd-36/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Darmanitan.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darmanitan-next-destinies-nxd-60/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(DarMAXitan)\b(?![^<>]*<\/a>|[^<]*>)/i';
		$replace[] = '<a href="http://pkmncards.com/card/darmanitan-next-destinies-nxd-60/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Darumaka.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darumaka-next-destinies-nxd-17/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Double.{1,2}Colou?rless(?:.{1,2}Energy)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/double-colorless-energy-next-destinies-nxd-92/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Elgyem.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/elgyem-next-destinies-nxd-61/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Emboar.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/emboar-next-destinies-nxd-100/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Emolga.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/emolga-next-destinies-nxd-49/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Exp\..{1,2}Share)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/exp-share-next-destinies-nxd-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ferroseed.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ferroseed-next-destinies-nxd-77/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Foongus.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/foongus-next-destinies-nxd-8/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Frillish.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/frillish-next-destinies-nxd-34/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gardevoir.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gardevoir-next-destinies-nxd-57/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Grimer.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/grimer-next-destinies-nxd-52/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Growlithe.{1,2}NXD.{1,2}#?10)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/growlithe-next-destinies-nxd-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Growlithe.{1,2}NXD.{1,2}#?11)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/growlithe-next-destinies-nxd-11/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Heavy.{1,2}Ball)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/heavy-ball-next-destinies-nxd-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Hippopotas.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hippopotas-next-destinies-nxd-65/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Hippowdon.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hippowdon-next-destinies-nxd-66/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Hydreigon.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hydreigon-next-destinies-nxd-103/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Jellicent.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/jellicent-next-destinies-nxd-35/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Jigglypuff.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/jigglypuff-next-destinies-nxd-78/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Kirlia.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/kirlia-next-destinies-nxd-56/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Kricketot.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/kricketot-next-destinies-nxd-3/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Kricketune.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/kricketune-next-destinies-nxd-4/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b((?<!Black.|White.)Kyurem.{1,2}EX)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/kyurem-ex-next-destinies-nxd-38/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lampent.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lampent-next-destinies-nxd-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lapras.{1,2}NXD.{1,2}#?25)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lapras-next-destinies-nxd-25/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lapras.{1,2}NXD.{1,2}#?26)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lapras-next-destinies-nxd-26/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Level.{1,2}Ball)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/level-ball-next-destinies-nxd-89/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Litwick.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/litwick-next-destinies-nxd-18/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lucario.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lucario-next-destinies-nxd-64/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Luxio.{1,2}NXD.{1,2}#?44)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/luxio-next-destinies-nxd-44/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Luxio.{1,2}NXD.{1,2}#?45)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/luxio-next-destinies-nxd-45/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Luxray.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/luxray-next-destinies-nxd-46/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Meowth.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/meowth-next-destinies-nxd-80/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mewtwo.{1,2}EX(?:.{1,2}NXD)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mewtwo-ex-next-destinies-nxd-54/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mienfoo.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mienfoo-next-destinies-nxd-67/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mienshao.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mienshao-next-destinies-nxd-68/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Minccino.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/minccino-next-destinies-nxd-84/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Moltres.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/moltres-next-destinies-nxd-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Muk.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/muk-next-destinies-nxd-53/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Munna.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/munna-next-destinies-nxd-58/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Musharna.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/musharna-next-destinies-nxd-59/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Nuzleaf.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/nuzleaf-next-destinies-nxd-71/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Panpour.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/panpour-next-destinies-nxd-28/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pansage.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pansage-next-destinies-nxd-6/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pansear.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pansear-next-destinies-nxd-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Persian.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/persian-next-destinies-nxd-81/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pidove.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pidove-next-destinies-nxd-83/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pikachu.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pikachu-next-destinies-nxd-39/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pinsir.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pinsir-next-destinies-nxd-1/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pok.{1,2}mon.{1,2}Center)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pokemon-center-next-destinies-nxd-90/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Prism(?:.{1,2}Energy)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/prism-energy-next-destinies-nxd-93/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Raichu.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/raichu-next-destinies-nxd-40/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ralts.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ralts-next-destinies-nxd-55/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Regigigas.{1,2}EX(?:.{1,2}NXD)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/regigigas-ex-next-destinies-nxd-82/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Reshiram.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/reshiram-next-destinies-nxd-21/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Reshiram.{1,2}EX(?:.{1,2}NXD)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/reshiram-ex-next-destinies-nxd-22/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Riolu.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/riolu-next-destinies-nxd-63/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scrafty.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scrafty-next-destinies-nxd-74/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scraggy.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scraggy-next-destinies-nxd-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Seedot.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/seedot-next-destinies-nxd-2/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Shaymin.{1,2}EX(?:.{1,2}NXD)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shaymin-ex-next-destinies-nxd-5/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Shiftry.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shiftry-next-destinies-nxd-72/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Shinx.{1,2}NXD.{1,2}#?42)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shinx-next-destinies-nxd-42/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Shinx.{1,2}NXD.{1,2}#?43)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shinx-next-destinies-nxd-43/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simipour.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simipour-next-destinies-nxd-29/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simisage.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simisage-next-destinies-nxd-7/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simisear.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simisear-next-destinies-nxd-16/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Skyarrow.{1,2}Bridge)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/skyarrow-bridge-next-destinies-nxd-91/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sneasel.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sneasel-next-destinies-nxd-69/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Starmie.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/starmie-next-destinies-nxd-24/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Staryu.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/staryu-next-destinies-nxd-23/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vanillish.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vanillish-next-destinies-nxd-32/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vanillite.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vanillite-next-destinies-nxd-31/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vanilluxe.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vanilluxe-next-destinies-nxd-33/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Weavile.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/weavile-next-destinies-nxd-70/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Wigglytuff.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/wigglytuff-next-destinies-nxd-79/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zapdos.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zapdos-next-destinies-nxd-41/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zebstrika.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zebstrika-next-destinies-nxd-48/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zekrom.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zekrom-next-destinies-nxd-50/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zekrom.{1,2}EX(?:.{1,2}NXD)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zekrom-ex-next-destinies-nxd-51/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zoroark.{1,2}NXD)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zoroark-next-destinies-nxd-102/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//
		// Victory Medal
		//
			
		$search[] = '/\b(Victory.{1,2}Medal)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/victory-medal-spring-2010-2011-victory-medals/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//
		// Noble Victories
		//
		
		$search[] = '/\b(Accelgor.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/accelgor-noble-victories-nvi-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Amoonguss.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/amoonguss-noble-victories-nvi-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Archen.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/archen-noble-victories-nvi-66/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Archeops.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/archeops-noble-victories-nvi-67/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Audino.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/audino-noble-victories-nvi-85/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Axew.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/axew-noble-victories-nvi-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Beheeyem.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/beheeyem-noble-victories-nvi-56/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bisharp.{1,2}NVI.{1,2}#?76)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bisharp-noble-victories-nvi-76/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bisharp.{1,2}NVI.{1,2}#?82)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bisharp-noble-victories-nvi-82/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Blitzle.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blitzle-noble-victories-nvi-35/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Carracosta.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/carracosta-noble-victories-nvi-26/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Chandelure.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/chandelure-noble-victories-nvi-60/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cobalion.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cobalion-noble-victories-nvi-84/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cofagrigus.{1,2}NVI.{1,2}#?46)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cofagrigus-noble-victories-nvi-46/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cofagrigus.{1,2}NVI.{1,2}#?47)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cofagrigus-noble-victories-nvi-47/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Conkeldurr.{1,2}NVI.{1,2}#?64)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/conkeldurr-noble-victories-nvi-64/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Conkeldurr.{1,2}NVI.{1,2}#?65)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/conkeldurr-noble-victories-nvi-65/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cover.{1,2}Fossil)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cover-fossil-noble-victories-nvi-90/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Crustle.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/crustle-noble-victories-nvi-7/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cryogonal.{1,2}NVI.{1,2}#?32)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cryogonal-noble-victories-nvi-32/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cryogonal.{1,2}NVI.{1,2}#?33)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cryogonal-noble-victories-nvi-33/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Deino.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/deino-noble-victories-nvi-77/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Druddigon.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/druddigon-noble-victories-nvi-89/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Duosion.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/duosion-noble-victories-nvi-51/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Durant.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/durant-noble-victories-nvi-83/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Dwebble.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dwebble-noble-victories-nvi-6/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Eelektrik.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/eelektrik-noble-victories-nvi-40/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Eelektross.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/eelektross-noble-victories-nvi-41/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Elgyem.{1,2}NVI.{1,2}#?54)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/elgyem-noble-victories-nvi-54/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Elgyem.{1,2}NVI.{1,2}#?55)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/elgyem-noble-victories-nvi-55/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Emolga.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/emolga-noble-victories-nvi-37/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Escavalier.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/escavalier-noble-victories-nvi-80/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Eviolite)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/eviolite-noble-victories-nvi-91/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Foongus.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/foongus-noble-victories-nvi-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Fraxure.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/fraxure-noble-victories-nvi-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Frillish.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/frillish-noble-victories-nvi-30/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Garbodor.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/garbodor-noble-victories-nvi-49/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gigalith.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gigalith-noble-victories-nvi-61/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Golett.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/golett-noble-victories-nvi-71/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Golurk.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/golurk-noble-victories-nvi-72/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gurdurr.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gurdurr-noble-victories-nvi-63/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Haxorus.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/haxorus-noble-victories-nvi-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Heatmore.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/heatmor-noble-victories-nvi-18/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Hydreigon.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/hydreigon-noble-victories-nvi-79/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Jellicent.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/jellicent-noble-victories-nvi-31/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Karrablast.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/karrablast-noble-victories-nvi-8/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Kyurem.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/kyurem-noble-victories-nvi-34/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lampent.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lampent-noble-victories-nvi-59/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Landorus.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/landorus-noble-victories-nvi-74/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Larvesta.{1,2}NVI.{1,2}#?19)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/larvesta-noble-victories-nvi-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Larvesta.{1,2}NVI.{1,2}#?20)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/larvesta-noble-victories-nvi-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Leavanny.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/leavanny-noble-victories-nvi-3/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lilligant.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lilligant-noble-victories-nvi-5/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Litwick.{1,2}NVI.{1,2}#?57)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/litwick-noble-victories-nvi-57/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Litwick.{1,2}NVI.{1,2}#?58)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/litwick-noble-victories-nvi-58/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Meowth.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/meowth-noble-victories-nvi-102/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mienfoo.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mienfoo-noble-victories-nvi-69/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mienshao.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mienshao-noble-victories-nvi-70/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(N)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/n-noble-victories-nvi-101/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Palpitoad.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/palpitoad-noble-victories-nvi-23/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pansear.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pansear-noble-victories-nvi-16/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pawniard.{1,2}NVI.{1,2}#?75)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pawniard-noble-victories-nvi-75/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pawniard.{1,2}NVI.{1,2}#?81)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pawniard-noble-victories-nvi-81/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Petilil.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/petilil-noble-victories-nvi-4/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Plume.{1,2}Fossil)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/plume-fossil-noble-victories-nvi-93/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Reuniclus.{1,2}NVI.{1,2}#?52)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/reuniclus-noble-victories-nvi-52/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Reuniclus.{1,2}NVI.{1,2}#?53)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/reuniclus-noble-victories-nvi-53/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(Rocky.{1,2}Helmet)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/rocky-helmet-noble-victories-nvi-94/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Seismitoad.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/seismitoad-noble-victories-nvi-24/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sewaddle.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sewaddle-noble-victories-nvi-1/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Shelmet.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/shelmet-noble-victories-nvi-11/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simisear.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simisear-noble-victories-nvi-17/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Solosis.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/solosis-noble-victories-nvi-50/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Stunfisk.{1,2}NVI.{1,2}#?42)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/stunfisk-noble-victories-nvi-42/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Stunfisk.{1,2}NVI.{1,2}#?68)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/stunfisk-noble-victories-nvi-68/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Super.{1,2}Rod)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/super-rod-noble-victories-nvi-95/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swadloon.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swadloon-noble-victories-nvi-2/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Terrakion.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/terrakion-noble-victories-nvi-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Timburr.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/timburr-noble-victories-nvi-62/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tirtouga.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tirtouga-noble-victories-nvi-25/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Trubbish.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/trubbish-noble-victories-nvi-48/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tympole.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tympole-noble-victories-nvi-22/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tynamo.{1,2}NVI.{1,2}#?38)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tynamo-noble-victories-nvi-38/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tynamo.{1,2}NVI.{1,2}#?39)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tynamo-noble-victories-nvi-39/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vanillish.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vanillish-noble-victories-nvi-28/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vanillite.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vanillite-noble-victories-nvi-27/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vanilluxe.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vanilluxe-noble-victories-nvi-29/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Victini.{1,2}NVI.{1,2}#?14)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/victini-noble-victories-nvi-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Fliptini)\b(?![^<>]*<\/a>|[^<]*>)/i';
		$replace[] = '<a href="http://pkmncards.com/card/victini-noble-victories-nvi-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Victory.{1,2}Star.{1,2}Victini)\b(?![^<>]*<\/a>|[^<]*>)/i';
		$replace[] = '<a href="http://pkmncards.com/card/victini-noble-victories-nvi-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Victini.{1,2}NVI.{1,2}#?15)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/victini-noble-victories-nvi-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(V-create.{1,2}Victini)\b(?![^<>]*<\/a>|[^<]*>)/i';
		$replace[] = '<a href="http://pkmncards.com/card/victini-noble-victories-nvi-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Victini.{1,2}NVI.{1,2}#?43)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/victini-noble-victories-nvi-43/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Virizion.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/virizion-noble-victories-nvi-13/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Volcarona.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/volcarona-noble-victories-nvi-21/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Xtransceiver)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/xtransceiver-noble-victories-nvi-96/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Yamask.{1,2}NVI.{1,2}#?44)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/yamask-noble-victories-nvi-44/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Yamask.{1,2}NVI.{1,2}#?45)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/yamask-noble-victories-nvi-45/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zebstrika.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zebstrika-noble-victories-nvi-36/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zweilous.{1,2}NVI)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zweilous-noble-victories-nvi-78/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';		
		
		//
		// Emerging Powers
		//
		
		$search[] = '/\b(Audino.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/audino-emerging-powers-epo-83/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Basculin.{1,2}EPO.{1,2}#?24)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/basculin-emerging-powers-epo-24/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Basculin.{1,2}EPO.{1,2}#?25)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/basculin-emerging-powers-epo-25/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Beartic.{1,2}EPO.{1,2}#?30)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/beartic-emerging-powers-epo-30/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Beartic.{1,2}EPO.{1,2}#?31)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/beartic-emerging-powers-epo-31/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bianca)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bianca-emerging-powers-epo-90/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Boldore.{1,2}EPO.{1,2}#?51)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/boldore-emerging-powers-epo-51/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Boldore.{1,2}EPO.{1,2}#?52)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/boldore-emerging-powers-epo-52/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Braviary.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/braviary-emerging-powers-epo-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(Cheren)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/cheren-emerging-powers-epo-91/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cinccino.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cinccino-emerging-powers-epo-85/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cobalion.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cobalion-emerging-powers-epo-77/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cottonee.{1,2}EPO.{1,2}#?10)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cottonee-emerging-powers-epo-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cottonee.{1,2}EPO.{1,2}#?9)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cottonee-emerging-powers-epo-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Crushing.{1,2}Hammer)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/crushing-hammer-emerging-powers-epo-92/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cubchoo.{1,2}EPO.{1,2}#?28)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cubchoo-emerging-powers-epo-28/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cubchoo.{1,2}EPO.{1,2}#?29)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cubchoo-emerging-powers-epo-29/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Darmanitan.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darmanitan-emerging-powers-epo-21/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Darumaka.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darumaka-emerging-powers-epo-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Deerling.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/deerling-emerging-powers-epo-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Drilbur.{1,2}EPO.{1,2}#?54)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/drilbur-emerging-powers-epo-54/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Drilbur.{1,2}EPO.{1,2}#?55)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/drilbur-emerging-powers-epo-55/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ducklett.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ducklett-emerging-powers-epo-26/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Emolga.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/emolga-emerging-powers-epo-32/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Excadrill.{1,2}EPO.{1,2}#?56)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/excadrill-emerging-powers-epo-56/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Excadrill.{1,2}EPO.{1,2}#?57)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/excadrill-emerging-powers-epo-57/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ferroseed.{1,2}EPO.{1,2}#?70)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ferroseed-emerging-powers-epo-70/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ferroseed.{1,2}EPO.{1,2}#?71)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ferroseed-emerging-powers-epo-71/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ferrothorn.{1,2}EPO.{1,2}#?72)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ferrothorn-emerging-powers-epo-72/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ferrothorn.{1,2}EPO.{1,2}#?73)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ferrothorn-emerging-powers-epo-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Galvantula.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/galvantula-emerging-powers-epo-34/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gigalith.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gigalith-emerging-powers-epo-53/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothita.{1,2}EPO.{1,2}#?43)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothita-emerging-powers-epo-43/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothita.{1,2}EPO.{1,2}#?44)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothita-emerging-powers-epo-44/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothitelle.{1,2}EPO.{1,2}#?47)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothitelle-emerging-powers-epo-47/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothitelle.{1,2}EPO.{1,2}#?48)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothitelle-emerging-powers-epo-48/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothorita.{1,2}EPO.{1,2}#?45)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothorita-emerging-powers-epo-45/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gothorita.{1,2}EPO.{1,2}#?46)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gothorita-emerging-powers-epo-46/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(Great.{1,2}Ball)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/great-ball-emerging-powers-epo-93/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Joltik.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/joltik-emerging-powers-epo-33/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klang.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klang-emerging-powers-epo-75/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klink.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klink-emerging-powers-epo-74/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klinklang.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klinklang-emerging-powers-epo-76/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Krokorok.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/krokorok-emerging-powers-epo-61/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Krookodile.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/krookodile-emerging-powers-epo-62/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Leavanny.{1,2}EPO.{1,2}#?7)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/leavanny-emerging-powers-epo-7/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Leavanny.{1,2}EPO.{1,2}#?8)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/leavanny-emerging-powers-epo-8/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Liepard.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/liepard-emerging-powers-epo-65/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lilligant.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lilligant-emerging-powers-epo-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mandibuzz.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mandibuzz-emerging-powers-epo-69/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(Max.{1,2}Potion)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/max-potion-emerging-powers-epo-94/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Minccino.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/minccino-emerging-powers-epo-84/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Panpour.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/panpour-emerging-powers-epo-22/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pansage.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pansage-emerging-powers-epo-1/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pansear.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pansear-emerging-powers-epo-18/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Patrat.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/patrat-emerging-powers-epo-78/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Petilil.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/petilil-emerging-powers-epo-13/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pidove.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pidove-emerging-powers-epo-80/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pok.{1,2}mon.{1,2}Catcher|Catcher)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pokemon-catcher-emerging-powers-epo-95/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Purrloin.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/purrloin-emerging-powers-epo-64/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Recycle)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/recycle-emerging-powers-epo-96/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Roggenrola.{1,2}EPO.{1,2}#?49)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/roggenrola-emerging-powers-epo-49/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Roggenrola.{1,2}EPO.{1,2}#?50)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/roggenrola-emerging-powers-epo-50/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rufflet.{1,2}EPO.{1,2}#?86)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rufflet-emerging-powers-epo-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Rufflet.{1,2}EPO.{1,2}#?87)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/rufflet-emerging-powers-epo-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sandile.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sandile-emerging-powers-epo-60/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sawk.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sawk-emerging-powers-epo-59/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sawksbuck.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sawsbuck-emerging-powers-epo-16/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scolipede.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scolipede-emerging-powers-epo-40/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sewaddle.{1,2}EPO.{1,2}#?3)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sewaddle-emerging-powers-epo-3/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sewaddle.{1,2}EPO.{1,2}#?4)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sewaddle-emerging-powers-epo-4/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sigilyph.{1,2}EPO.{1,2}#?41)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sigilyph-emerging-powers-epo-41/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sigilyph.{1,2}EPO.{1,2}#?42)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sigilyph-emerging-powers-epo-42/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simipour.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simipour-emerging-powers-epo-23/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simisage.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simisage-emerging-powers-epo-2/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simisear.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simisear-emerging-powers-epo-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swadloon.{1,2}EPO.{1,2}#?5)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swadloon-emerging-powers-epo-5/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swadloon.{1,2}EPO.{1,2}#?6)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swadloon-emerging-powers-epo-6/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swanna.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swanna-emerging-powers-epo-27/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swoobat.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swoobat-emerging-powers-epo-37/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Terrakion.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/terrakion-emerging-powers-epo-63/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Throh.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/throh-emerging-powers-epo-58/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Thundurus.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/thundurus-emerging-powers-epo-35/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tornadus.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tornadus-emerging-powers-epo-89/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tranquill.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tranquill-emerging-powers-epo-81/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Unfezant.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/unfezant-emerging-powers-epo-82/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Venipede.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/venipede-emerging-powers-epo-38/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Virizion.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/virizion-emerging-powers-epo-17/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vullaby.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vullaby-emerging-powers-epo-68/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Watchog.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/watchog-emerging-powers-epo-79/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Whimsicott.{1,2}EPO.{1,2}#?11)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/whimsicott-emerging-powers-epo-11/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Whimsicott.{1,2}EPO.{1,2}#?12.{1,2})\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/whimsicott-emerging-powers-epo-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Whirlipede.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/whirlipede-emerging-powers-epo-39/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Woobat.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/woobat-emerging-powers-epo-36/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zoroark.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zoroark-emerging-powers-epo-67/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zorua.{1,2}EPO)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zorua-emerging-powers-epo-66/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
	
		//
		// Black & White
		//
		
		$search[] = '/\b(Alomomola.{1,2}BL?W.{1,2}#?38)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/alomomola-black-white-blw-38/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Alomomola.{1,2}BL?W.{1,2}#?39)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/alomomola-black-white-blw-39/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Audino.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/audino-black-white-blw-87/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Basculin.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/basculin-black-white-blw-35/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Blitzle.{1,2}BL?W.{1,2}#?40)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blitzle-black-white-blw-40/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Blitzle.{1,2}BL?W.{1,2}#?41)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/blitzle-black-white-blw-41/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bouffalant.{1,2}BL?W.{1,2}#?90)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bouffalant-black-white-blw-90/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bouffalant.{1,2}BL?W.{1,2}#?91)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/bouffalant-black-white-blw-91/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Cinccino.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/cinccino-black-white-blw-89/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Darmanitan.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darmanitan-black-white-blw-25/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Darumaka.{1,2}BL?W.{1,2}#?23)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darumaka-black-white-blw-23/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Darumaka.{1,2}BL?W.{1,2}#?24)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/darumaka-black-white-blw-24/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Deerling.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/deerling-black-white-blw-13/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Dewott.{1,2}BL?W.{1,2}#?29)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dewott-black-white-blw-29/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Dewott.{1,2}BL?W.{1,2}#?30)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/dewott-black-white-blw-30/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ducklett.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/ducklett-black-white-blw-36/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Duosion.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/duosion-black-white-blw-56/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Emboar.{1,2}BL?W.{1,2}#?19)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/emboar-black-white-blw-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Bad.{0,2}Boar)\b(?![^<>]*<\/a>|[^<]*>)/i';
		$replace[] = '<a href="http://pkmncards.com/card/emboar-black-white-blw-19/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Emboar.{1,2}BL?W.{1,2}#?20)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/emboar-black-white-blw-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Ability.{0,2}Boar)\b(?![^<>]*<\/a>|[^<]*>)/i';
		$replace[] = '<a href="http://pkmncards.com/card/emboar-black-white-blw-20/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Energy.{1,2}Retrieval)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/energy-retrieval-black-white-blw-92/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(Energy.{1,2}Search)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/energy-search-black-white-blw-93/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Energy.{1,2}Switch)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/energy-switch-black-white-blw-94/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Full.{1,2}Heal)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/full-heal-black-white-blw-95/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Galvantula.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/galvantula-black-white-blw-46/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Gurdurr.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/gurdurr-black-white-blw-60/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Herdier.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/herdier-black-white-blw-82/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Joltik.{1,2}BL?W.{1,2}#?44)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/joltik-black-white-blw-44/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Joltik.{1,2}BL?W.{1,2}#?45)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/joltik-black-white-blw-45/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klinklang.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klinklang-black-white-blw-76/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klang.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klang-black-white-blw-75/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Klink.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/klink-black-white-blw-74/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Krokorok.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/krokorok-black-white-blw-64/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Krookodile.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/krookodile-black-white-blw-65/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Liepard.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/liepard-black-white-blw-67/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lilligant.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lilligant-black-white-blw-10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lillipup.{1,2}BL?W.{1,2}#?80)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lillipup-black-white-blw-80/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Lillipup.{1,2}BL?W.{1,2}#?81)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/lillipup-black-white-blw-81/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Mandibuzz.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/mandibuzz-black-white-blw-73/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Maractus.{1,2}BL?W.{1,2}#?11)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/maractus-black-white-blw-11/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Maractus.{1,2}BL?W.{1,2}#?12)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/maractus-black-white-blw-12/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Minccino.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/minccino-black-white-blw-88/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Munna.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/munna-black-white-blw-48/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Musharna.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/musharna-black-white-blw-49/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Oshawott.{1,2}BL?W.{1,2}#?27)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/oshawott-black-white-blw-27/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Oshawott.{1,2}BL?W.{1,2}#?28)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/oshawott-black-white-blw-28/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Panpour.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/panpour-black-white-blw-33/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pansage.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pansage-black-white-blw-7/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pansear.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pansear-black-white-blw-21/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Patrat.{1,2}BL?W.{1,2}#?77)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/patrat-black-white-blw-77/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Patrat.{1,2}BL?W.{1,2}#?78)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/patrat-black-white-blw-78/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Petilil.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/petilil-black-white-blw-9/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pidove.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pidove-black-white-blw-84/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pignite.{1,2}BL?W.{1,2}#?17)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pignite-black-white-blw-17/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pignite.{1,2}BL?W.{1,2}#?18)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pignite-black-white-blw-18/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pikachu.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pikachu-black-white-blw-115/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(PlusPower)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pluspower-black-white-blw-96/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(Pok.{1,2}.{1,2}Ball)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/poke-ball-black-white-blw-97/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pok.{1,2}dex(?!.{1,2}Handy.?910is))\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pokedex-black-white-blw-98/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Pok.{1,2}mon.{1,2}Communication)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/pokemon-communication-black-white-blw-99/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b((?<!Max.)Potion)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/potion-black-white-blw-100/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(Professor.{1,2}Juniper|Juniper)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/professor-juniper-black-white-blw-101/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Purrloin.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/purrloin-black-white-blw-66/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Reshiram.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/reshiram-black-white-blw-26/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Reuniclus.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/reuniclus-black-white-blw-57/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Revive)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/revive-black-white-blw-102/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Samurott.{1,2}BL?W.{1,2}#?31)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/samurott-black-white-blw-31/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Samurott.{1,2}BL?W.{1,2}#?32)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/samurott-black-white-blw-32/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sandile.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sandile-black-white-blw-63/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sawk.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sawk-black-white-blw-62/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Sawsbuck.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/sawsbuck-black-white-blw-14/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scolipede.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scolipede-black-white-blw-54/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scrafty.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scrafty-black-white-blw-69/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Scraggy.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/scraggy-black-white-blw-68/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Serperior.{1,2}BL?W.{1,2}#?5)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/serperior-black-white-blw-5/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Serperior.{1,2}BL?W.{1,2}#?6)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/serperior-black-white-blw-6/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Servine.{1,2}BL?W.{1,2}#?3)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/servine-black-white-blw-3/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Servine.{1,2}BL?W.{1,2}#?4)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/servine-black-white-blw-4/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simipour.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simipour-black-white-blw-34/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simisage.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simisage-black-white-blw-8/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Simisear.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/simisear-black-white-blw-22/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Snivy.{1,2}BL?W.{1,2}#?1)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/snivy-black-white-blw-1/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Snivy.{1,2}BL?W.{1,2}#?2)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/snivy-black-white-blw-2/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Solosis.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/solosis-black-white-blw-55/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Stoutland.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/stoutland-black-white-blw-83/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Super.{1,2}Scoop.{1,2}Up)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/super-scoop-up-black-white-blw-103/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(SSU)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/super-scoop-up-black-white-blw-103/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swanna.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swanna-black-white-blw-37/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//$search[] = '/\b(?<!Energy.)(Switch)\b(?![^<>]*<\/a>|[^<]*>)/';
		//$replace[] = '<a href="http://pkmncards.com/card/switch-black-white-blw-104/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Swoobat.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/swoobat-black-white-blw-51/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tepig.{1,2}BL?W.{1,2}#?15)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tepig-black-white-blw-15/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tepig.{1,2}BL?W.{1,2}#?16)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tepig-black-white-blw-16/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Throh.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/throh-black-white-blw-61/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Timburr.{1,2}BL?W.{1,2}#?58)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/timburr-black-white-blw-58/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Timburr.{1,2}BL?W.{1,2}#?59)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/timburr-black-white-blw-59/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tranquill.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tranquill-black-white-blw-85/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Unfezant.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/unfezant-black-white-blw-86/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Venipede.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/venipede-black-white-blw-52/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Vullaby.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/vullaby-black-white-blw-72/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Watchog.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/watchog-black-white-blw-79/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Whirlipede.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/whirlipede-black-white-blw-53/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Woobat.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/woobat-black-white-blw-50/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zebstrika.{1,2}BL?W.{1,2}#?42)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zebstrika-black-white-blw-42/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zebstrika.{1,2}BL?W.{1,2}#?43)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zebstrika-black-white-blw-43/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zekrom.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zekrom-black-white-blw-47/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zoroark.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zoroark-black-white-blw-71/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zorua.{1,2}BL?W)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zorua-black-white-blw-70/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//
		// Black & White Promos
		//
		
		$search[] = '/\b(Snivy(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW01)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/snivy-black-white-promos-bw01/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tepig(?:.{1,2}BL?W)?.{1,2}Promo.{1,2}BW02)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tepig-black-white-promos-bw02/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Oshawott(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW03)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/oshawott-black-white-promos-bw03/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Reshiram(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW004)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/reshiram-black-white-promos-bw004/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zekrom(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW005)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zekrom-black-white-promos-bw005/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Snivy(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW06)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/snivy-black-white-promos-bw06/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tepig(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW07)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tepig-black-white-promos-bw07/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Oshawott(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW08)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/oshawott-black-white-promos-bw08/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Zoroark(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW09)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/zoroark-black-white-promos-bw09/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Axew(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW10)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/axew-black-white-promos-bw10/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Tropical.{1,2}Beach)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/tropical-beach-black-white-promos-bw28/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Victory.{1,2}Cup)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/victory-cup-1st-place-black-white-promos-bw31/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Litwick(?:.{1,2}BL?W)?.{1,2}Promo(?:.{1,2}BW27)?)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/litwick-black-white-promos-bw27/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		$search[] = '/\b(Battle.{1,2}City)\b(?![^<>]*<\/a>|[^<]*>)/';
		$replace[] = '<a href="http://pkmncards.com/card/battle-city-black-white-promos-bw39/" class="scan-link" title="Click to view this card" target="_blank">$1</a>';
		
		//
		// Return array with search/replace terms
		//	
		
		return array( 'search' => $search, 'replace' => $replace );	
		
}