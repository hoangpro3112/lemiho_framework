$(document).ready(function(){
            // 1562822
            $.ajax({
                url: 'http://api.openweathermap.org/data/2.5/forecast/?q=Vietnam&APPID=6143988f1974454e064c3fa6b86ad6d1&lang=vn&cnt=5&units=metric',
                success: function(res){
                    //console.log(res.list);
                    $("#count_data").html(res.list.length);
                    $(res.list).each(function(i,data){
                        var open_html = '<div class="inline-block">';
                        var time = '<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">' + data.dt_txt + '</div>'; 
                        var icon = '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><img src="https://openweathermap.org/img/w/' + data.weather[0].icon + '.png"></div>';     
                        var description = '<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">' + "<span> Description : " + data.weather[0].description + '<br/> Speed : ' + data.wind.speed + ' m/s</span>' + '</div>'; 
                        var close_html = '</div>';
                        $(".data-list-weather").append(open_html + time + icon + description + close_html);
                    });
                }
            }); 
});