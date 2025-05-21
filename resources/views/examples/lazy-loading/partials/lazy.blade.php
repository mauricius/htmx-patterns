<div>
  <p>CPU Usage: {{ $cpu }}%</p>
  <progress value="{{ $cpu }}" max="100"></progress>
</div>
<div>
  <p>RAM Usage: {{ $ram }}%</p>
  <progress value="{{ $ram }}" max="100"></progress>
</div>
<div>
  <p>Disk Usage: {{ $disk }}%</p>
  <progress value="{{ $disk }}" max="100"></progress>
</div>
