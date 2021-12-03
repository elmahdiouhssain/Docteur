
       $(document).ready(function () {
       
           $.ajaxSetup({
               headers:{
                   'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
               }
           });
       
           var calendar = $('#calendar').fullCalendar({
               editable:true,
               header:{
                   left:'prev,next today',
                   center:'title',
                   right:'month,agendaWeek,agendaDay'
               },
               events:'/',
               selectable:true,
               selectHelper: true,
               
               select:function(start, end, allDay)
               {
                   var title = prompt('Rendez-vous titre:');
                   //var fullname = prompt('Nom complete:');
                   //var cin = prompt('Cin:');
                   //var observation = prompt('Observation:');
       
                   if(title)
                   {
                       var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
       
                       var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
       
                       $.ajax({
                           url:"/full-calender/action",
                           type:"POST",
                           data:{
                               title: title,
                               start: start,
                               //fullname: fullname,
                               //cin: cin,
                               //observation: observation,
                               end: end,
                               type: 'add'
                           },
                           success:function(data)
                           {
                               calendar.fullCalendar('refetchEvents');
                               alert("Rendez-vous enregistré avec succèe");
                           }
                       })
                   }
               },
               editable:true,
               eventResize: function(event, delta)
               {
                   var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                   var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                   var title = event.title;
                   var id = event.id;
                   $.ajax({
                       url:"/full-calender/action",
                       type:"POST",
                       data:{
                           title: title,
                           start: start,
                           end: end,
                           id: id,
                           type: 'update'
                       },
                       success:function(response)
                       {
                           calendar.fullCalendar('refetchEvents');
                           alert("Rendez-vous modifié avec succèe");
                       }
                   })
               },
               eventDrop: function(event, delta)
               {
                   var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                   var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                   var title = event.title;
                   var id = event.id;
                   $.ajax({
                       url:"/full-calender/action",
                       type:"POST",
                       data:{
                           title: title,
                           start: start,
                           end: end,
                           id: id,
                           type: 'update'
                       },
                       success:function(response)
                       {
                           calendar.fullCalendar('refetchEvents');
                           alert("Rendez-vous modifié avec succèe");
                       }
                   })
               },
       
               eventClick:function(event)
               {
                   if(confirm("Vous-etes sur supprimé le rendez-vous !"))
                   {
                       var id = event.id;
                       $.ajax({
                           url:"/full-calender/action",
                           type:"POST",
                           data:{
                               id:id,
                               type:"delete"
                           },
                           success:function(response)
                           {
                               calendar.fullCalendar('refetchEvents');
                               alert("Rendez-vous supprimé avec succèe");
                           }
                       })
                   }
               }
           });
       
       });
         