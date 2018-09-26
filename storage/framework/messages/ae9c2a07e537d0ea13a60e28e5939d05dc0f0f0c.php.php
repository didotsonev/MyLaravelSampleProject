<tr id="company_<?php echo e($company->id); ?>">
    <td><?php echo e($company->name); ?></td>
    <td><?php echo e($company->email); ?></td>
    <td><?php echo e($company->website); ?></td>
    <td class="text-center">
        <button type="button" class="btn btn-light btn-sm">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="deleteCompany('<?php echo e($company->id); ?>');">Delete</button>
    </td>
</tr>