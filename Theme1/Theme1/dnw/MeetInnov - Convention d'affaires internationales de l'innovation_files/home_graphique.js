$(window).load(function () {


		//graphique 1

	   var legende1 = ["<strong>66%</strong> "+$('#europe').val(),"<strong>24%</strong> "+$('#chine').val(),"<strong>10%</strong> "+$('#monde').val()];
	   var r = Raphael("holder"),
                pie = r.piechart(171,171,156, [66,24,10], {
                    colors : [
                                 "#6a1b4c",
                                 "#f1821d",
                                 "#a9c216"
                              ],
                   matchColors : true
                });
                //r.text(320, 100, "Interactive Pie Chart").attr({ font: "20px sans-serif" });
                pie.hover(function () {
                    this.sector.stop();
                    this.sector.animate({ transform: 's1.1 1.1 ' + this.cx + ' ' + this.cy },150, "ease");
                    //$(this).css('background-color', 'red');
                    var tips = $("#holder").parent().find(".graph-tip");
               		tips.html(legende1[this.sector.id]);
               		tips.show({duration:150,queue:true});
               		//console.log(legende1[this.sector.id]);

                    //console.log($(this).parent());
                }, function () {
                	var tips = $("#holder").parent().find(".graph-tip");
                    this.sector.animate({ transform: 's1 1 ' + this.cx + ' ' + this.cy }, 150, "ease");
                    tips.hide();
                    //this.flag.animate({opacity: 0}, 300, function () {this.remove();});

                });

           //graphique2 on duplique et on recommence...sorry about that...

            var legende2 = ["<strong>40%</strong> "+$('#pme').val(),"<strong>27%</strong> "+$('#eco').val(),"<strong>12%</strong> "+$('#autres').val(),"<strong>8%</strong> "+$('#invest').val(),"<strong>6%</strong> "+$('#recherche').val(),"<strong>6%</strong> "+$('#groupes').val()];


	   		var r2 = Raphael("holder2"),
                pie = r2.piechart(171,171,156, [40,27,12,8,7,6], {
                    colors : [
                            	"#24a2a0",
                                 "#da0057",
                                 "#6a1b4c",
                                 "#f1821d",
								 "#a9c216",
								 "#666666"
                              ],
                   matchColors : true
                });
                //r.text(320, 100, "Interactive Pie Chart").attr({ font: "20px sans-serif" });
                pie.hover(function () {
                    this.sector.stop();
                    this.sector.animate({ transform: 's1.1 1.1 ' + this.cx + ' ' + this.cy },150, "ease");
                    //$(this).css('background-color', 'red');
                    var tips = $("#holder2").parent().find(".graph-tip");
               		tips.html(legende2[(this.sector.id-6)]);
               		tips.show({duration:150,queue:true});
               		//console.log(legende2[(this.sector.id-10)] + "id = " + this.sector.id);

                    //console.log($(this).parent());
                }, function () {
                	var tips = $("#holder2").parent().find(".graph-tip");
                    this.sector.animate({ transform: 's1 1 ' + this.cx + ' ' + this.cy }, 150, "ease");
                    tips.hide();
                    //this.flag.animate({opacity: 0}, 300, function () {this.remove();});

                });



                //deplacements tips common
                $(".graph-tip").hide();
                $(".graph-container").mousemove(function(evt){
                	var offset_souris_y = 35;
                	var offset_souris_x = 15;
                	var offset = $(this).offset();
                	$(this).find(".graph-tip").css({"left":(evt.pageX - offset.left - offset_souris_x)+"px","top":(evt.pageY - offset.top - offset_souris_y )+"px"});
                	//console.log(evt.offset.left);
                });


});//fin on load