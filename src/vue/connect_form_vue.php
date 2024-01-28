<?php

function connect_form_vue(): string
{
    $html = "<form><label>Se Connecter</label>
<input type='text' id='iduser'/>
<input type='text' id='passw'/>
<button type='submit'>Submit</button>
</form>";

    return $html;
}