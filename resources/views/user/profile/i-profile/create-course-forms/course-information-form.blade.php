<div class="container-fluid main__div">
    <h4 class="my-3">Course Information</h4>
    <form class="row cust-drop" id="course-information-form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="user_id" value="{{ $auth->id }}" />
        <div class="form-group pb-3">
            <label for="course-type">Choose Course Type</label>
            <select id="course-type-information" class="w-100">
                <option value="">Select Course Type</option>
                @foreach ($main_categories as $mainCatgory)
                <option value={{ $mainCatgory->id }}>{{ $mainCatgory->name }}</option>
                @endforeach
            </select>
        </div>
        <span class="error-message" id="course-type-error"></span>
        <div class="form-group pb-3">
            <label for="parent-sub-category">Parent Subcategory</label>
            <select id="parent-sub-category-information" class="w-100 parent-sub-category-information">
                <option value="">Select Parent Subcategory</option>
            </select>
        </div>
        <span class="error-message" id="parent-sub-category-information-error"></span>
        <div class="form-group pb-3">
            <label for="child-subcategory">Child Subcategory</label>
            <select class="w-100" id="child-subcategory-information">
                <option value=''>Select Child Subcategory</option>
            </select>
        </div>
        <span class="error-message" id="child-subcategory-information-error"></span>
        <div class="form-group pb-3">
            <label for="course-name">Course Name</label>
            <input class="w-100 form-control" type="text" placeholder="Write here..." name="course-name-information" id="course-name-information">
        </div>
        <span class="error-message" id="course-name-information-error"></span>

        <div class="row g-0">
            <div class="col-12 col-sm-12 col-md-6 px-3">
                <div class="form-group pb-3">
                    <label for="course-name">Actual Sale Price</label>
                    <div class="flex-input-fields" style="display:flex;">
                        <span class="nice-select icon-input append_currency_simbol" disabled style="width: 47px;padding-right: 18px;background-color: #cccbcb;margin-right: -2px;"></span>
                        <input class="w-100 form-control float-none" type="text" placeholder="Write here..." name="course-name" id="actual-sell-price">
                    </div>
                </div>
                <span class="error-message" id="actual-sell-price-error"></span>
            </div>

            <div class="col-12 col-sm-12 col-md-6 px-3">
                <div class="form-group pb-3">
                    <label for="usd-price">Price In USD</label>
                    <div class="flex-input-field">
                        <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                        <input class="w-100 nice-select float-none" type="number" placeholder="Price In USD" name="usd-price" id="usd-price-information" disabled>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 px-3">
                <div class="form-group pb-3">
                    <label for="sell-price">Sale Price (Optional)</label>
                    <div class="flex-input-fields" style="display:flex;">
                        <span class="nice-select icon-input append_currency_simbol" disabled style="width: 47px;padding-right: 18px;background-color: #cccbcb;margin-right: -2px;"></span>
                        <input type="text" class="w-100 form-control" placeholder="Write here..." name="sell-price" id="sell-price-type-option">
                    </div>
                </div>
                <span class="error-message" id="sell-price-type-option-error"></span>
            </div>
            <div class="col-12 col-sm-12 col-md-6 px-3">
                <div class="form-group pb-3">
                    <label for="sell-price">Sale Price In USD</label>
                    <div class="flex-input-field">
                        <input type="text" class="nice-select icon-input" disabled value="&#36;" name="">
                        <input type="number" class="w-100 nice-select float-none" placeholder="Sell Price In USD" name="sell-price" id="sell-price-option" disabled>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <label>Description</label>
            <!-- <textarea class="w-100 nice-select float-none" placeholder="Write here..." id="desc" name="desc"></textarea> -->
            <div id="desc" style="border:20px;">
                <p>Please write description.</p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 px-3">
            <div class="form-group pb-3">
                <label for="sell-price">Course Image</label>
                <div class="flex-input-field">
                    <input id="couse_image" type="file" name="couse_image" class="form-control mb-3">
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <button type="submit" id="creat_course" class="btn btn-success">Create</button>
            {{-- <a  href="" class="btn btn-success">Create</a> --}}
        </div>
    </form>
</div>