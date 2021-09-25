$(document).ready(function () {
    $("#type").change(function () {
        var val = $(this).val();
        if (val == "Kigali") {
            $("#size").html('<option value="Gasabo">Gasabo</option> <option value="Kicukiro">Kicukiro</option> <option value="Nyarugenge">Nyarugenge</option>');
        } else if (val == "East") {
            $("#size").html('<option value="Bugesera">Bugesera</option><option value="Gatsibo">Gatsibo</option><option value="Kayonza">Kayonza</option><option value="Kirehe">Kirehe</option><option value="Ngoma">Ngoma</option><option value="Nyagatare">Nyagatare</option><option value="Rwamagana">Rwamagana</option>');
        } else if (val == "West") {
            $("#size").html('<option value="Karongi">Karongi</option><option value="Ngororero">Ngororero</option><option value="Nyabihu">Nyabihu</option><option value="Nyamasheke">Nyamasheke</option><option value="Rubavu">Rubavu</option><option value="Rusizi">Rusizi</option><option value="Rutsiro">Rutsiro</option>');
        } else if (val == "North") {
            $("#size").html('<option value="Burera">Burera</option><option value="Gakenke">Gakenke</option><option value="Gicumbi">Gicumbi</option><option value="Musanze">Musanze</option><option value="Rulindo">Rulindo</option>');
        }  else if (val == "South") {
            $("#size").html('<option value="Gisagara">Gisagara</option><option value="Huye">Huye</option><option value="Kamonyi">Kamonyi</option><option value="Muhanga">Muhanga</option><option value="Nyamagabe">Nyamagabe</option><option value="Nyanza">Nyanza</option><option value="Nyaruguru">Nyaruguru</option><option value="Ruhango">Ruhango</option>');
        }
    });
});
