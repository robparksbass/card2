$('document').ready(function() {
    // $('a').click(function(evt){
    //     evt.preventDefault();
    //     var page = $(this).attr('href');
    //     $('body').load(page);
    // }); //end click anon fcn
}); //end ready


function displayBusinesses(dataFromServer) {
    $('.businesses').append('<ol id="businessList"></ol>');
    var businesses = dataFromServer.businesses;
    $('#resultsList').html('<h2>Businesses:</h2>');
     $.each(businesses, function(resultsIndex, resultsValue) {
            var name = resultsValue.name;
            var address = resultsValue.address;
            var hours = resultsValue.hours;
            var phone = resultsValue.phone;
            var website = resultsValue.website;
            var br = '<br>'
            var detailString = '<strong>' + name + '</strong>:' + br + address + br + hours + br + '<a href="tel:' + phone + '">' + phone + '</a>' +  br + '<a href="' + website + '" target="_blank">Visit Website</a>';
            var li = '<li>' + detailString + '</li>';
            $('#businessList').append(li);
    }); //end each anon fcn
}//end displayBusinesses fcn

function displayCards(dataFromServer) {
    $('.cards').append('<div class="cardsList"></div>');
    var cards = dataFromServer.businesses;
    $.each(cards, function(resultsIndex, resultsValue) {
        var name = resultsValue.name;
        var br = '<br>'
        var detailString = '<h3>' + name + '</h3><div><img src="' + resultsValue.frontCard + '" alt="' + resultsValue.name + ' Front">' + br + '<img src="' + resultsValue.backCard + '" alt="' + resultsValue.name + ' Back"></div>'; 
        $('.cardsList').append(detailString);
    }); //end each anon fcn
    $('.cardsList').accordion({
        collapsible:true,
        active:false,
        heightStyle: "content",
    });//end accordion options
}//end displayCards fcn

$('form').submit(function(evt) {
   evt.preventDefault(); 
    alert('working on this feature');
});


//function to turn form input into JSON:

//(function ($) {
//    $.fn.serializeFormJSON = function () {
//
//        var o = {};
//        var a = this.serializeArray();
//        $.each(a, function () {
//            if (o[this.name]) {
//                if (!o[this.name].push) {
//                    o[this.name] = [o[this.name]];
//                }
//                o[this.name].push(this.value || '');
//            } else {
//                o[this.name] = this.value || '';
//            }
//        });
//        return o;
//    };
//})(jQuery);
//
//$('form').submit(function(evt) {
//    evt.preventDefault();
//    var data = $(this).serializeFormJSON();
//    console.log(data);
//
//    /* Object
//        businessWebsite: "value"
//        name: "value"
//        password: "value"
//     */
//});


//function ConvertFormToJSON(form){
//    var array = jQuery(form).serializeArray();
//    var json = {};
//    
//    jQuery.each(array, function() {
//        json[this.name] = this.value || '';
//    });
//    
//    return json;
//}
//
//jQuery(document).on('ready', function() {
//    jQuery('form#add-new-task').bind('submit', function(event){
//        event.preventDefault();
//
//        var form = this;
//        var json = ConvertFormToJSON(form);
//
//        $.ajax({
//            type: "POST",
//            url: "submit.php",
//            data: json,
//            dataType: "json"
//        });
//		
//        var tbody = jQuery('#to-do-list > tbody');
//        
//        tbody.append('<tr><th scope="row" style="background-color:' + this['new-task-color'].value + 
//            '"><input type="checkbox" /></th><td>' + this['new-task-date'].value +
//            '</td><td>' + this['new-task-priority'].value + '</td><td>' + this['new-task-name'].value + 
//            '</td><td>' + this['new-task-desc'].value + '</td><td>' + this['new-task-email'].value + '</td></tr>');                
//        
//        return true;
//    });
//});