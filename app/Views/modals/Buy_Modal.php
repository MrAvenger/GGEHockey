<!-- Modal -->
<script src="<?php echo base_url()?>/assets/js/form.js" type="text/javascript"></script>
<div class="modal fade" id="BuyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Покупка билета</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col">
                                <label for="fio_field" class="form-label" style="width:250px;">ФИО: <label
                                        class="text-danger">*</label></label>
                                <input type="text" id="fio_field" class="form-control"
                                    aria-describedby="fio_fieldHelpBlock">
                                <div id="fio_fieldHelpBlock" class="form-text">
                                    В данном поле укажите своё ФИО.
                                </div>
                            </div>
                            <div class="col">
                                <label for="email_field" class="form-label" style="width:250px;">Email: <label
                                        class="text-danger">*</label></label>
                                <input type="text" id="email_field" class="form-control"
                                    aria-describedby="email_fieldHelpBlock">
                                <div id="email_fieldHelpBlock" class="form-text">
                                    В данном поле укажите адрес электронной почты.
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col">
                                <label for="phone_field" class="form-label">Номер телефона: <label
                                        class="text-danger">*</label></label>
                                <input type="tel" id="phone_field" name="phone_field"
                                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control"
                                    aria-describedby="phone_fieldHelpBlock" required>
                                <div id="phone_fieldHelpBlock" class="form-text">
                                    В данном поле укажите ваш номер телефона для связи с вами.
                                </div>
                            </div>
                        </div>
                        <label class="form-label">Укажите вид билета:</label>
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onchange='showOrHide();'
                                        name="flexRadioDefault" id="radioForum" checked>
                                    <label class="form-check-label" for="radioForum">
                                        Форум
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" onchange='showOrHide();'
                                        name="flexRadioDefault" id="radioMK">
                                    <label class="form-check-label" for="radioMK">
                                        С мастер классами
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="div_dop_content_form" class="row align-items-center"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary">Перейти к оплате</button>
            </div>
        </div>
    </div>
</div>