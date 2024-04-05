<div>
    <div style="min-height: 70vh; display:flex; align-items:center;justify-content:center; background-color:#6CA7DD; border-radius:20px">
    <div style="flex:3; ">
        <img style=" width:100%; height:100%;padding:40px"
            src="https://images.prismic.io/axerve/9fddf851-bee8-41d9-a366-7fb7493ee07a_Foto%20Ecommerce%20-%20Blog.jpg?ixlib=gatsbyFP&auto=compress%2Cformat&fit=max"
            alt="">
    </div>
    <div style="flex:3;padding:40px">
        <h1 style="color: white" class="mb-4">{{__('ui.create')}}</h1>

        @if (session()->has('message'))
            <div class="alert alert-success flex flex-row justify-center my-2">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <h4 class="alert alert-danger">{{ session('error') }}</h4>
        @endif

        <form style="color: white;text-shadow:2px 2px 2px black;" wire.submit.prevent='store'>
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">{{__('ui.title')}}</label>
                <input wire:model.live='title' type="text" class="form-control" id="title"
                    aria-describedby="emailHelp" name="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">{{__('ui.desc')}}</label>
                <input wire:model.live='body' type="text" class="form-control" id="body" name="body">
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">{{__('ui.price')}}</label>
                <input wire:model.live='price' type="number" class="form-control" id="price" name="price">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">{{__('ui.category')}}</label>
                <select wire:model.defer='category' class="form-select" id="category" name="category">
                    <option value="">{{__('ui.choose')}}</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label style="color:white; text-shadow:2px 2px 2px black;" for="image"
                    class="form-label">Immagini</label>
                <input wire:model='temporary_images' type="file" name="images" multiple class="form-control"
                    id="images">
                @error('temporary_images.*')
                    <div><span class="text-danger">{{ $message }}</span></div>
                @enderror
            </div>
            <button style="background-color: #2414da; font-weight:bold" type="submit" class="btn btn-success"
                wire:click.prevent="store">{{__('ui.insert2')}}</button>
        </form>
        
    </div>
</div>
<div style="background-color:#6CA7DD; border-radius:20px; margin-top:20px;">
    @if (!empty($images))
        <div class="row">
            <div class="col-12">
                <p class="m-3" style="color:white; text-shadow:2px 2px 2px black;">Preview:</p>
                <div class="row m-3">
                    @foreach ($images as $key => $image)
                        <div class="col">
                            <div class="img-preview mx-auto "
                                style="background-image: url({{ $image->temporaryUrl() }});height:400px; width:400px; object-fit:cover;">
                            </div>
                            <button type="button"
                                class="btn btn-danger shadow d-block text-center mt-2 mx-auto"
                                wire:click.prevent='removeImage({{ $key }})'>Cancella</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
</div>
