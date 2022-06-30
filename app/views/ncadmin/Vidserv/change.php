<section class="content-header">
    <div class="container">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a>
            </li>
            <li class="breadcrumb-item" class="active">Список услуг</li>
        </ol>
    </div>
</section>
<!-- Main content -->
<section class="card">
    <div class="container">

        <div class="card-header">
            <h3 class="card-title">Изменение вида услуги</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-hover__row">
                                    <tbody>
                                        <tr>

                                            <th>Наименование вида</th>
                                            <td>
                                                <input type="text" name="title" class="form-control" id="title" value="<?= $services['VID_U']; ?>" required>


                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Фото</th>
                                            <td>
                                                <div class="input__wrapper">

                                                    <div class="field__wrapper">

                                                        <input name="file" type="file" name="file" id="field__file-2" class="field field__file" multiple>

                                                        <label class="field__file-wrapper" for="field__file-2">
                                                            <div class="field__file-fake">Файл не выбран</div>
                                                            <div class="field__file-button">Выбрать</div>
                                                        </label>

                                                    </div>
                                                    <div class="single">
                                                        <img src="<?= PATH ?>/img/services/<?= $services['FOTO']; ?>" alt="" style="max-height: 150px;">
                                                    </div>


                                                    <script>
                                                        let fields = document.querySelectorAll('.field__file');
                                                        Array.prototype.forEach.call(fields, function(input) {
                                                            let label = input.nextElementSibling,
                                                                labelVal = label.querySelector('.field__file-fake').innerText;

                                                            input.addEventListener('change', function(e) {
                                                                let countFiles = '';
                                                                if (this.files && this.files.length >= 1)
                                                                    countFiles = this.files.length;

                                                                if (countFiles)
                                                                    label.querySelector('.field__file-fake').innerText = 'Выбрано файлов: ' + countFiles;
                                                                else
                                                                    label.querySelector('.field__file-fake').innerText = labelVal;
                                                            });
                                                        });
                                                    </script>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td></td>
                                            <td>
                                               
                                            </td>
                                        </tr> -->
                                    </tbody>

                                </table>
                                <div class="box-footer float-right">
                                    <input type="hidden" name="id" value="<?= $services['ID_U']; ?>">
                                    <button type="submit" class="btn btn-active">Сохранить изменения</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->