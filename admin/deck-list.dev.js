function pkmn_insert_deck_list() {
    return "<table class=\"pkmn-deck-list\"><tbody><tr><td><p class=\"pkmn-deck-list-head\"><strong>Pokemon -&nbsp;</strong></p><p>Start Pokemon...</p></td><td><p class=\"pkmn-deck-list-head\"><strong>Trainers -&nbsp;</strong></p><p>Start Trainers...</p></td><td><p class=\"pkmn-deck-list-head\"><strong>Energy -&nbsp;</strong></p><p>Start Energy...</p></td></tr></tbody></table><br />";
}

(function() {

    tinymce.create('tinymce.plugins.pkmn_deck_list', {

        init : function(ed, url){
            ed.addButton('pkmn_deck_list', {
                title : 'Insert Deck List',
                onclick : function() {
                    ed.execCommand(
                        'mceInsertContent',
                        false,
                        pkmn_insert_deck_list()
                        );
                },
                image: url + "/deck-list.png"
            });
        },

        getInfo : function() {
            return {
                longname : 'Blank Deck List Template',
                author : 'Adam Capriola',
                authorurl : 'http://www.sixprizes.com/',
                infourl : '',
                version : "1.0"
            };
        }
    });

    tinymce.PluginManager.add('pkmn_deck_list', tinymce.plugins.pkmn_deck_list);
    
})();