console.log("main.js loaded");
(function(w,k){
    while( a = w[k].q.pop() ){
        if( a[1] ){
          var data = a[1];
        };
        if( a[0] === 'init'){
          console.log('init was called')
        };
    }
})(window,'client');

jQuery(document).ready(function(){
    console.log("jQuery ready");    
})

function button_click(){
    console.log("button_click was called");
}

jQuery("#button").on("click", button_click);
