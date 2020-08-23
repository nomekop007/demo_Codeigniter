<!--Vista principal -->
<div class="row">
    <div class="col s12">
        <div class="card-panel">
            <p>
                <h4 class="center-align">Modulo perfil</h4>
                <a class="waves-effect waves-light btn-floating modal-trigger" href="#modal1">
                    <i class="material-icons">add</i>
                </a>
                <br>
                <table class="bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Estado</td>
                            <td>accion</td>
                        </tr>
                    </thead>
                    <tbody id="perfiles">

                    </tbody>
                </table>
            </p>
        </div>
    </div>
</div>

<!-- Modales -->

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Nuevo perfil</h4>
        <p>

            <form action="post">
                <input type="text" id="nombre_perfil" placeholder="nombre perfil " />
                <div class="input-field col s12">
                    <select id="estado_perfil" class="select">

                        <option value="0">Inactivo</option>
                        <option value="1">Activo</option>
                    </select>
                    <label>Estado</label>
                </div>
                <button class="btn" id="save">Guardar</button>
            </form>
        </p>
    </div>
</div>





<!-- script jquery  NO FUNCIONBAAAA -->
<script>
$(".modal-trigger").leanModal();
$(".select").material_select();

perfiles();

function perfiles() {
    $("#perfiles").empty();
    var url = base_url + "perfiles";

    $.getJSON(url, result => {
        $.each(result, (i, o) => {
            var fila = "<tr>";
            fila += "<td>" + o.idperfil + "</td>";
            fila += "<td>" + o.nombre + "</td>";
            fila += "<td>" + ((o.estado === "1") ? "Activo" : "Inactivo") + "</td>";
            fila += "<td></td>";
            fila += "</tr>";
            $("#perfiles").append(fila);
        });
    })
}
</script>