<button {{$attributes->merge(['class'=>' flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-black rounded-md hover:bg-gray-800 focus:outline-none focus:bg-gray-900 transition duration-300 transform active:scale-95 ease-in-out','type'=>'submit'])}}>
{{$slot}}
</button>
