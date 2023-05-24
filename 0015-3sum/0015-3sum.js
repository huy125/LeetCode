/**
 * Two Pointers approach
 * @param {number[]} nums
 * @return {number[][]}
 */
const threeSum = function(nums) {
    nums.sort((a, b) => a - b);
    let result = [];
    for (let i = 0; i < nums.length; i++) {
        if (nums[i] > 0) break;
        if (nums[i] === nums[i - 1]) continue;
        twoSum(nums, i, result);
    }
    
    return result;
};

const twoSum = (nums, pointer, result) => {
    let low = pointer + 1;
    let high = nums.length - 1;
    while (low < high) {
        let sum = nums[pointer] + nums[low] + nums[high];
        if (sum < 0) {
            ++low;
        } else if (sum > 0) {
            --high;
        } else {
            result.push([nums[pointer], nums[low], nums[high]]);
            low++;
            high--;
            while (low < high && nums[low] === nums[low - 1]) ++low;
        }        
    }
}