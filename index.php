
  <select name="bdate_year" id="bdate_year" class="input-reg def_val" required>
    <option value="" disabled selected hidden>Select Date</option>
    <?php
    for ($i = 1900; $i <= date("Y"); $i++)
    {
        echo "<option value=\"" . $i . "\">" . $i . "</option>";
    }
    ?>
</select>