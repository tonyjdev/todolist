<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Todo List</h5>
        <p class="card-text">Write your next task...</p>
        <input class="form-control" type="text" wire:model="task" wire:keyup.enter="addTodo" placeholder="add todo">
    </div>

    <div class="card-body">

        <ul class="list-group">
            @forelse($todos as $todo)

                @if($todo->status == 'open')
                    <li class="list-group-item">
                        <input class="form-check-input me-1 mt-2" type="checkbox" value="" id="markAsDone-{{$todo->id}}" wire:change="markAsDone({{$todo->id}})">
                        <label class="form-check-label" style="padding: 0.20rem;" for="markAsDone-{{$todo->id}}">{{ $todo->task }}</label>
                    </li>
                @endif

                @if ($todo->status == 'done')
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span style="{{($todo->status == 'done') ? 'text-decoration: line-through' : ''}}">{{ $todo->task }}</span>
                        <button class="btn btn-danger"
                                style="--bs-btn-padding-y: .15rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;"
                                type="button" id="button-addon2"
                                wire:click="deleteTodo({{$todo->id}})">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </li>
               @endif

            @empty
                <p>No todos here.</p>
           @endforelse
        </ul>
    </div>
</div>
