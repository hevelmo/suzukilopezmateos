var sampleJSON = {
    "people": [
        {
            "name": "Peter",
            "gender": "Male"
        },
        {
            "name": "Alanna",
            "gender": "Female"
        }
    ],
    "setGenderClass": function() {
        return function( text, render ) {
            return ( render( text ) === 'Female' ) ? 'f' : 'm';
        }
    }
};

var getTemplateContents = function() {
    jQuery.get( 'widgets/html-widget.html', processTemplate );
};

var processTemplate = function( template ) {
    var rendered = Mustache.render( template, sampleJSON );
    jQuery( '#template-output' ).html( rendered );
};

getTemplateContents();