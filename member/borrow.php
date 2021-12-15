<?php
include('header.php');
?>

    <!-- Main Content -->
    <div class="main">
        <table align="left" style="width: 50%; height:450px; margin:2.5em;">
            <form>
                <tr>
                    <th>
                        <h1 class="ml-3">Borrow Books</h1>
                    </th>
                </tr>
                <tr>
                    <td>
                        <label for="name" class="ml-3">Name</label>
                        <input id="name" type="text" class="form-control ml-3 w-75" name="name" required autofocus>
                    </td>
                    <td>
                        <label for="username"> Username</label>
                        <input id="username" type="text" class="form-control ml-0 mr-5 w-75" name="username" required
                            autofocus>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="book" class="ml-3">Book</label>
                        <input id="book" type="text" class="form-control ml-3 w-75" name="book" required autofocus>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tglpinjam" class="ml-3">Date Borrowed</label>
                        <input id="tglpinjam" type="date" class="form-control ml-3 w-75" name="tglpinjam" required
                            autofocus>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tglkembali" class="ml-3">Date Due</label>
                        <input id="tglkembali" type="date" class="form-control ml-3 w-75" name="tglkembali" required
                            autofocus>
                    </td>
                </tr>
            </form>
        </table>
        <table align="right" style=" width: 40%; height: 540px; background-color:transparent;">
            <tr>
                <td>
                    <center>
                        <a class="btn" style="border-radius: 50px; background-color: rgb(221, 171, 105); width: 190px;"
                            data-toggle="modal" data-target="#submitborrow">
                            <h3>Submit</h3>
                        </a>
                    </center>
                </td>
            </tr>
        </table>
    </div>

    <div class="modal fade" id="submitborrow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body ml-auto mr-auto">Thank you for successfully borrowing books.<br>Please pickup the
                    books at our library address.</div>
                <div class="modal-footer">
                    <a class="btn btn-light mr-auto ml-auto w-100" href="topbooks.html">OK</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" untuk mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-dark" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>