<!--
/**
 * Created by PhpStorm.
 * User: oracle
 * Date: 3/25/17
 * Time: 9:51 PM
 */ -->

<form name="frmSearch" method="post" action="../../src/Queries.php">
    <p class="search_input">
       <input type="text" placeholder="DRN,Item name or Code" name="drn"/>

        <select name="outlet">
           <option>All</option>
            <option></option>
        </select>
        <select name="page">
            <option>sales</option>
            <option>pricelist</option>
            <option>distributor</option>
            <option>item</option>
        </select>

<input type="text" placeholder="From Date" id="post_at"
       name="search[post_at]"  value="<?php echo $post_at; ?>" class="input-control"/>
<input type="text" placeholder="To Date" id="post_at_to_date"
       name="search[post_at_to_date]" style="margin-left:10px"
       value="<?php echo $post_at_to_date; ?>" class="input-control" />
<input type="submit" name="go" value="Search" >
</p>

</form>



<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
    $.datepicker.setDefaults({
        showOn: "button",
        buttonImage: "iconCalendar.gif",
        buttonText: "Date Picker",
        buttonImageOnly: true,
        dateFormat: 'yy-mm-dd'
    });
    $(function() {
        $("#post_at").datepicker();
        $("#post_at_to_date").datepicker();
    });
</script>