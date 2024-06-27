/**
 * @param {string} s
 * @return {number}
 */
var minAddToMakeValid = function(s) {
    let open = 0, close = 0;

    for (let i = 0; i < s.length; i++) {
        if (s[i] == '(') {
            open++;
        } else {
            open ? open-- : close++;
        }
    }

    return open + close;
};

/** 
 * Time Complexity: O(N)
 * Space Complexity: O(N)
 */
var minAddToMakeValidUsingStack = function(s) {
    const stack = [];
    let ans = 0;

    for (let i = 0; i < s.length; i++) {
        if (s[i] == '(') {
            stack.push(s[i]);
        } else {
            if (stack.length != 0 && stack[stack.length - 1] == '(') {
                stack.pop();
            } else {
                ans++;
            }
        }
    }

    ans += stack.length;

    return ans;
}