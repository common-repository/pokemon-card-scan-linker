<?php
//
// Auto-correct commonly misspelled Pokemon TCG terms
//

//
// Spell Check Content
//
add_filter ( 'the_content', 'pkmn_linker_spell_check_content', 7 );

function pkmn_linker_spell_check_content($content) {
		
	// Get spell check setting
	$spell_check = pkmn_linker_get_setting('spell_check');
	
	// If it's enabled and we're on a post, proceed
	if ( !empty($spell_check) && is_singular('post') ) {
		
		// Get array of both search/replace terms
		$array = pkmn_linker_spell_check();
		
		// Create separate search/replace arrays
		$search = $array[ 'search' ];
		$replace = $array[ 'replace' ];
		
		// Preg replace all
		$content = preg_replace($search, $replace, $content);
	
	}
	
	return $content;
	
}

//
// Spell Check Comments
//
add_filter ( 'comment_text', 'pkmn_linker_spell_check_comments', 7 );

function pkmn_linker_spell_check_comments($content) {
	
	// Get comments linker setting
	$linker_comments = pkmn_linker_get_setting('linker_comments');
	
	// If it's enabled and we're on a post, then proceed
	if ( !empty($linker_comments) && is_singular('post') ) {
		
		// Get spell check setting
		$spell_check = pkmn_linker_get_setting('spell_check');
		
		// If it's enabled, then proceed again
		if ( !empty($spell_check) ) {
			
			// Get array of both search/replace terms
			$array = pkmn_linker_spell_check();
			
			// Create separate search/replace arrays
			$search = $array[ 'search' ];
			$replace = $array[ 'replace' ];
			
			// Preg replace all
			$content = preg_replace($search, $replace, $content);
		
		}
	
	}
	
	return $content;
	
}

//
// Create array with search/replace terms
//

function pkmn_linker_spell_check() {
		
	//
	// Pokemon
	//
	
	$search[] = '/\bNinetails\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'Ninetales';
	
	$search[] = '/\bThunderus\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'Thundurus';
	
	$search[] = '/\bLandurus\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'Landorus';
	
	$search[] = '/\bTyrouge\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'Tyrogue';
	
	$search[] = '/\bEelectrik|Eelektric\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'Eelektrik';
	
	$search[] = '/\bAmoongus\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'Amoonguss';
	
	$search[] = '/\bCincino|Cincinno|Cinccinno\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'Cinccino';
	
	//
	// Trainers
	//
	
	$search[] = '/\bSky.{1,2}Arrow.{1,2}Bridge\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/i';
	$replace[] = 'Skyarrow Bridge';
	
	$search[] = '/\bPlus.{0,2}Power\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/i';
	$replace[] = 'PlusPower';
	
	// 
	// Sets
	//
	
	$search[] = '/\bNDE?\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'NXD';
	
	$search[] = '/\bNV\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'NVI';
	
	$search[] = '/\bEP\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'EPO';
	
	$search[] = '/\bCoL\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/i';
	$replace[] = 'CL';
	
	$search[] = '/\bPT\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/';
	$replace[] = 'PL';
	
	//
	// Other Terms
	//
	
	$search[] = '/\bLv\..{1,2}X|Lv\.X\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/i';
	$replace[] = 'LV.X';
	
	$search[] = '/\bPok.{1,2}Power|Pok.{1,2}.{1,2}Power\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/i';
	$replace[] = 'Poke-Power';
	
	$search[] = '/\bPok.{1,2}Body|Pok.{1,2}.{1,2}Body\b(?![^<>]*<\/a>|[^<]*>|[^[]*])/i';
	$replace[] = 'Poke-Body';
	
	//
	// Return array with search/replace terms
	//
	
	return array( 'search' => $search, 'replace' => $replace );

}