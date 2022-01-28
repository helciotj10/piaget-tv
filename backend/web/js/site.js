$(document).ready(function() {
  
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });

       /* $('.js-basic-example').DataTable({
            responsive: true
        });

        //Exportable table
        $('.js-exportable').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                
            ],
            "language": {
              "search": "Pesquisa:",
              "lengthMenu": "Mostrar _MENU_ elementos por pagina",
              "zeroRecords": "Nenhum dado encontrado",
              "infoEmpty": "",
              "info": "Pagina _PAGE_ de _PAGES_",
              "infoFiltered": "",
              "paginate": {
                "previous": "Pagina anterior",
                "next": "Pagina seguinte"

              }
            }

        });*/
        
        /*$('.dataTable').dataTable({
          "order": [[ 1, "desc" ]],
          "language": {
            "search": "Pesquisa:",
            "lengthMenu": "Mostrar _MENU_ elementos por pagina",
            "zeroRecords": "Nenhum dado encontrado",
            "infoEmpty": "",
            "info": "Pagina _PAGE_ de _PAGES_",
            "infoFiltered": "",
            "paginate": {
                "previous": "Pagina anterior",
                "next": "Pagina seguinte"

              }

          }
        });*/
        
  } );