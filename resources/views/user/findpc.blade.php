@extends('layouts.app')

@section('content')
<style>
    .hovs:hover h5{
      text-decoration: underline;
      color: #007bff;
    }
    .hovs:hover{
      background-color: rgb(232, 232, 232);
      border-radius: 10px;
    }
    .hovs {
      padding: 10px;
      cursor: pointer;
    }
  </style>
<div class="container">
    <center><u><h3 class="mt-5">PREVENTIVE MAINTENANCE</h3></u></center>
    <center><p>INTEGRATED HOSPITAL OPERATIONS MANAGEMENT SYSTEM</p></center>
    <div class="mt-5">
            <h3 class="ml-4 mb-4">Search User</h3>
            <div class="container">
                    <div class="input-group input-group-sm col-4">
                        <input type="text" class="form-control ml-1" placeholder="Computer name" id="search">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                        </div>
                    </div>

                  <div id="computer_data">
                        @include('user.findcomputer')
                  </div>

                <div class="ml-4 mt-4">
                    {!! $comp->links() !!}
                </div>

        </div>
        @include('layouts.activities')
    </div>
</div>



<script>

    $(document).ready(function(){

        function find_pc(page, query){
            $.ajax({
            url:"/search/computer_data?page="+page+"&query="+query,
                success:function(data){
                    $('#computer_data').html(data);
                }
            });
        }
        
        $(document).on('keyup', '#search', function(){
            let query = $('#search').val();
            let page = $('#hidden_page').val();
            find_pc(page, query)
        })
        
        $(document).on('click', '.pagination a', function(e){
            e.preventDefault(); 
            let page = $(this).attr('href').split('page=')[1];
            let query = $('#search').val();

            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            find_pc(page, query);
        });

});
</script>


@endsection
