<div class="search-select-group show-for-large">
    <p class="tag uppercase">Filter by:</p>
    <div class="multi-select" data-multi-select>
        <span class="select-control" data-select-control>Region <span></span></span>
        <div class="options" data-options data-type="region">
            <label class="checkbox-item">
                <input type="checkbox" value="arab-states">
                Arab States
                <span class="checkmark"></span>
            </label>
            <label class="checkbox-item">
                <input type="checkbox" value="east-asia">
                East Asia and the Pacific
                <span class="checkmark"></span>
            </label>
            <label class="checkbox-item">
                <input type="checkbox" value="europe">
                Europe and Central Asia
                <span class="checkmark"></span>
            </label>
            <label class="checkbox-item">
                <input type="checkbox" value="latin-america">
                Latin America and the Caribbean
                <span class="checkmark"></span>
            </label>
            <label class="checkbox-item">
                <input type="checkbox" value="south asia">
                South Asia
                <span class="checkmark"></span>
            </label>
            <label class="checkbox-item">
                <input type="checkbox" value="africa">
                Sub-Saharan Africa
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="multi-select" data-multi-select>
        <span class="select-control" data-select-control>Office type <span></span></span>
        <div class="options" data-options data-type="office">
            <?php for ($i = 1; $i <= 200; $i++) { ?>
                <label class="checkbox-item">
                    <input type="checkbox" name="option<?= $i ?>" value="office_<?= $i ?>">
                    <?= "Value $i"?>
                    <span class="checkmark"></span>
                </label>
            <?php } ?>
        </div>
    </div>
    <div class="active-filters" data-container-filters></div>
</div>