<div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="">Kualitas Hafalan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="kualitas_hafalan" type="radio" class="with-gap" value="KURANG LANCAR" id="radio_hafalan_kuranglancar"
                                        <?php if($kualitas_hafalan == 'KURANG LANCAR') { echo "checked"; } ?>/>
                                        <label for="radio_hafalan_kuranglancar">KURANG LANCAR</label>
                                        <input name="kualitas_hafalan" type="radio" class="with-gap" value="CUKUP LANCAR" id="radio_hafalan_cukuplancar" 
                                        <?php if($kualitas_hafalan == 'CUKUP LANCAR') { echo "checked"; } ?>/>
                                        <label for="radio_hafalan_cukuplancar">CUKUP LANCAR</label>
                                        <input name="kualitas_hafalan" type="radio" class="with-gap" value="LANCAR" id="radio_hafalan_lancar" 
                                        <?php if($kualitas_hafalan == 'LANCAR') { echo "checked"; } ?>/>
                                        <label for="radio_hafalan_lancar">LANCAR</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="keterangan">Keterangan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="keterangan" class="form-control" value="<?= $keterangan; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>