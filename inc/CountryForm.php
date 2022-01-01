<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div>
        <label for="input-name">Country:</label>
        <input type="text" id="input-name" name="input-name">
    </div>

    <div>
        <label for="input-length">length of your trip:</label>
        <div>
            <label for="input-length">
                <input type="radio" id="input-length" name="prefered-length">Up to a week
            </label>

            <label for="input-length">
                <input type="radio" id="input-length" name="prefered-length">Up to 2 weeks
            </label>

            <label for="input-length">
                <input type="radio" id="input-length" name="prefered-length">Up to a month
            </label>

            <label for="input-length">
                <input type="radio" id="input-length" name="prefered-length">Longer than a month
            </label>
        </div>
    </div>

    <div>
        <label for="input-season">Season of your trip:</label>
        <select id="input-season" name="prefered-season">
            <option value="Winter">Winter</option>
            <option value="Spring">Spring</option>
            <option value="Summer">Summer</option>
            <option value="Autumn">Autumn</option>
        </select>
    </div>

    <div>
        <input type="submit" value="Submit">
    </div>
</form>