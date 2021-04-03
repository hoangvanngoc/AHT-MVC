<h1>Edit task</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Title</label>
        <?php foreach($tasks as $task) {?>
        <input type="text" class="form-control" id="title" placeholder="Enter a title" require name="title" value ="<?php if (isset($task->title)) echo $task->title;?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" require name="description" value ="<?php if (isset($task->description)) echo $task->description;}?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>