<!DOCTYPE html>
<html>
    <?php
    require_once './shared/header.php';
    require_once './controller/autenticationController.php';
    ?>
    <div>

        <br>
        <table id="example" class="table table-responsive table-bordered table-striped table-dark">
            <!-- Cabeçalho da tabela -->
            <thead>
                <tr>
                    <th>
                        Nome do componente
                    </th>
                    <th>
                        Descrição
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 2
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 3
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
                <tr>
                    <td>
                        Elemento 1
                    </td>
                    <td>
                        Descrição 1
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <?php
    require_once './shared/footer.php';
    ?>
</html>
