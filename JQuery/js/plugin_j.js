(function( $ ) {
 
    $.fn.showalt = function() {


    	alert("Mensagem exibida com sucesso")
 
        this.filter("button").each(function() {
            var atributo = $( this );
            atributo.append( " (" + atributo.attr( "alt" ) + ")" );
        });
 
        return this;
 
    };
 
}( jQuery ));
