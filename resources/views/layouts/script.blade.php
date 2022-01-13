
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/select2.min.js')}} "></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/status.js') }}"></script>
<script src="{{ asset('js/postStatus.js') }}"></script>
<script src="{{ asset('js/editStatus.js') }}"></script>
<script src="{{ asset('js/patchStatus.js') }}"></script>
<script src="{{ asset('js/postPreventive.js') }}"></script> {{-- for software only --}}
<script src="{{ asset('js/editpostPreventive.js') }}"></script>
<script src="{{ asset('js/submit.js') }}"></script>

<script src="{{ asset('js/popper.min.js') }}"></script>


<script>
    $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });

            function sub(){
                let str;
                let submit = document.querySelector('.ucase');

                str = submit.value;
                submit.value = str.toUpperCase();
            }
        });

    $(document).ready(function(){

        function fetch_data(page, query){
            $.ajax({
            url:"/pagination/fetch_data?page="+page+"&query="+query,
                success:function(data){
                    $('#table_data').html(data);
                }
            });
        }
        
        $(document).on('keyup', '#search', function(){
            let query = $('#search').val();
            let page = $('#hidden_page').val();
            fetch_data(page, query)
        })
        
        $(document).on('click', '.pagination a', function(e){
            e.preventDefault(); 
            let page = $(this).attr('href').split('page=')[1];
            let query = $('#search').val();

            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            fetch_data(page, query);
        });

        
});
</script>