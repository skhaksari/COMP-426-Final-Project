jQuery(document).ready(function($){

    //CHANGE ME!!! Define the relative or absolute path to your backend script
    var remoteUrl = 'backend.php';
    var url_base = "https://wwwp.cs.unc.edu/Courses/comp426-f17/users/carter4/EasySki/";

    //Initialize the HTTP cache
    var remoteCache = new Array();
    var newDate = "2017-12-15";
    //For each link in the calendar...
    $('table.calendar a').each(function(i,item){

        $(this).click(function(){
            var myDate = JSON.stringify(item.id);
            $.ajax(url_base + "dateHandler.php",
                   {type: "GET",
                    dataType: "json",
                    data: { date : myDate },
                    success: function(data) {
                        for (var i=0; i<data.length; i++) {
                            console.log(data[i]);
                            load_tickets(data[i]);
                        }
                    }
                   });
        });
    });

});


var load_tickets = function(ticket_item) { 
    console.log(ticket_item);
    //setTimeout(function(){ alert(ticket_item); }, 500);
};


/*			var calendarEvents = $('#calendar-events');			
			calendarEvents.slideUp('fast',function(){			
				if( remoteCache[linkId] != undefined ) { 
					calendarEvents.html(remoteCache[linkId]);
					calendarEvents.slideDown('fast');
				} else {
					calendarEvents.load(linkUrl,function(){
						remoteCache[linkId] = calendarEvents.html();
						calendarEvents.slideDown('fast');
					});
				}
			});
			return false;

            		//Unique ID for the link
/*		var linkId = item.id;

		//Unique URL for the link
		var linkUrl = remoteUrl+'?timestamp='+linkId;

		//Attach onclick event handler
*/
