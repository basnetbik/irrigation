<a href="" class="col-lg-12 col-xs-12 message"
     style="color: white; background-color:  <?php if($status == 0):; ?>#EA8484;
                                            <?php elseif($status == 1):; ?>#6ABD6A;
                                            <?php endif; ?>;"
>
    <h6 style="float: left;"><?php echo $message; ?></h6>
    <p href="" style="float: right; font-weight: bold;">X</p>
</a>

<script>
    $(document).on('click', '.message', function(e){
        e.preventDefault();
        $('.message').hide();
    });
</script>
