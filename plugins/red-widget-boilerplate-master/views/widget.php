<!-- This file is used to markup the public-facing widget. -->

<p>
    <?php  if (strlen(trim($weekdays)) > 0): ?>
    <span class='business-weekdays'>Mondays-Friday:</span>
    <?php echo $weekdays; ?>
    <?php  endif; ?>
</p>

<p>
    <?php  if (strlen(trim($saturdays)) > 0): ?>
    <span class='business-saturdays'>Saturdays:</span>
    <?php echo $saturdays; ?>
    <?php  endif; ?>
</p>

<p>
    <?php  if (strlen(trim($sundays)) > 0): ?>
    <span class='business-sundays'>Sundays:</span>
    <?php echo $sundays; ?>
    <?php  endif; ?>
</p>