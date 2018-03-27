<h2><?php echo $title; ?></h2>

<?php 
	//show error messages
	echo validation_errors(); 
	// render the form element and adds extra functionality 
	echo form_open('news/create'); 
?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>