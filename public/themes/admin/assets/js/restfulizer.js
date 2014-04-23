// restfulizer.js
/**
* Author: Zizaco (http://forums.laravel.io/viewtopic.php?pid=32426)
* Tweaked by rydurham
* 
* Restfulize any hiperlink that contains a data-method attribute by
* creating a mini form with the specified method and adding a trigger
* within the link.
* Requires jQuery!
*
* Ex:
* <a href="post/1" data-method="delete">destroy</a>
* // Will trigger the route Route::delete('post/(:id)')
*
* 
* Update: 
*  - This method will now ignore elements that have a '.disabled' class 
*  - Adding the '.action_confirm' class will trigger an optional confirm dialog.
*  - Adding the Session::token to 'data-token' will add a hidden input for needed for CSRF. 
*
*/
$(function(){
    $('[data-method]').not(".disabled").append(function(){
        var methodForm = "\n"
        methodForm += "<form action='"+$(this).attr('href')+"' method='POST' style='display:none'>\n"
        methodForm += " <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"
       	if ($(this).attr('data-token')) 
       	{ 
       		methodForm +="<input type='hidden' name='_token' value='"+$(this).attr('data-token')+"'>\n"
       	}
        methodForm += "</form>\n"
        return methodForm
    })
    .removeAttr('href')
    .attr('onclick',' if ($(this).hasClass(\'action_confirm\')) { if(confirm("Are you sure you want to do this?")) { $(this).find("form").submit(); } } else { $(this).find("form").submit(); }');
});

